const userModel = require("../models/users.model");
const filmModel = require("../models/films.model");
const axios = require('axios');
const moment = require('moment');
const { Op } = require('../config');
const fs = require('fs');
const path = require('path');


class AjaxController {

    async ajax_search(req, res) {
        try {
            var html = "";
            const results = await filmModel.findAll({ 
                where: { 
                    slug: {
                        [Op.like]: '%'+ req.params.search +'%'
                    },
                }
            });
            if (results.length > 0) {
                for (const item of results) {
                    var episode = JSON.parse(item.m3u8);
                    html += '<div class="col-lg-2 col-6 item p-3">\
                        <a class="position-relative rounded" href="/phim/' + item.slug + '/' + episode[0].server_data[0].slug + '">\
                            <figure class="rounded">\
                                <img class="bgi-no-repeat bgi-position-center bgi-size-cover w-100 h-225px h-sm-275px h-md-325px h-lg-350px" src="https://img.ophim1.com/uploads/movies/' + item.thumb_url.split("/").pop() + '">\
                            </figure>\
                            <div class="icon_overlay"></div>\
                            <div class="movie-post-episode">' + item.episode_current + '</div>\
                            <div class="movie-post-title-box">\
                                <div class="movie-post-title">\
                                    <h2 class="text-gray-800">' + item.title + '</h2>\
                                </div>\
                            </div>\
                        </a>\
                    </div>';
                }
            } else {
                html += '<div class="col-lg-12 text-center">\
                        Không có dữ liệu\
                    </div>';
            }
            return res.send(html);
        } catch (error) {
            console.log(error);
            return res.send(null);
        }  
    }

    async get_image(req, res) {
        const publicPath = path.join(__dirname, '../public');
        const uploadsPath = path.join(publicPath, 'uploads');

        if (!fs.existsSync(uploadsPath)) {
            fs.mkdirSync(uploadsPath);
        }
        try {
            const results = await filmModel.findAll({
                where: {
                    [Op.and]: {
                        thumb_url: {
                            [Op.notLike]: "%/uploads/%",
                        },
                        thumb_url: {
                            [Op.not]: "",
                        },
                    }
                },
                limit: 10,
            });

            await Promise.allSettled(results.map(async function(item) {
                try {
                    const thumbUrl = item.thumb_url.split("/").pop();
                    const posterUrl = item.poster_url.split("/").pop();

                    await Promise.all([
                        new Promise((resolve, reject) => {
                            axios({
                                url: "https://img.ophim1.com/uploads/movies/" + thumbUrl,
                                responseType: 'stream',
                            }).then(async (response) => {
                                response.data.pipe(fs.createWriteStream(path.join(publicPath, thumbUrl)));
                                response.data.on('end', () => {
                                    console.log('Thumbnail downloaded successfully');
                                    resolve();
                                });
                            }).catch(error => {
                                console.error(error);
                                reject(error);
                            });
                        }),

                        new Promise((resolve, reject) => {
                            axios({
                                url: "https://img.ophim1.com/uploads/movies/" + posterUrl,
                                responseType: 'stream',
                            }).then(async (response) => {
                                response.data.pipe(fs.createWriteStream(path.join(publicPath, posterUrl)));
                                response.data.on('end', () => {
                                    console.log('Poster downloaded successfully');
                                    resolve();
                                });
                            }).catch(error => {
                                console.error(error);
                                reject(error);
                            });
                        })
                    ]);

                    await Promise.all([
                        filmModel.update({
                            thumb_url: '/uploads/' + thumbUrl,
                        }, {
                            where: { id: item.id }
                        }),

                        filmModel.update({
                            poster_url: '/uploads/' + posterUrl,
                        }, {
                            where: { id: item.id }
                        })
                    ]);
                } catch (error) {
                    console.log(error);
                }
            }));

            await Promise.all(results.map(async function(item) {
                await filmModel.update({
                    thumb_url: '/uploads/' + item.thumb_url.split("/").pop(),
                    poster_url: '/uploads/' + item.poster_url.split("/").pop(),
                }, {
                    where: { id: item.id }
                });
            }));

            return res.send("Done!");

        } catch (error) {
            return res.status(500).send(error);
        }

    }


    async get_by_slug(req, res) {
        try {
            const results = await filmModel.findAll({
                where: { 
                    slug: req.params.slug,
                },
            });
            if (results.length > 0) {
                return res.send("Film exists: " + req.params.slug);
            } else {
                const response = await axios.get('https://ophim1.com/phim/' + req.params.slug);
                const data = response.data;

                var category = [];

                await Promise.all(data.movie.category.map(async function (item) {
                    category.push(item.name)
                }));

                let modified = moment(data.movie.modified.time).format('Y-MM-DD H:mm:ss');
                
                var episode_current = (data.movie.episode_current != null) ? data.movie.episode_current : 0;
                var episode_total = (data.movie.episode_total != null) ? data.movie.episode_total : 0;

                await filmModel.create({
                    title: data.movie.name,
                    origin_name: data.movie.origin_name,
                    description: data.movie.content,
                    type: data.movie.type,
                    status: data.movie.status,
                    episode_current: episode_current,
                    episode_total: episode_total,
                    slug: data.movie.slug,
                    thumb_url: data.movie.thumb_url,
                    poster_url: data.movie.poster_url,
                    likes: "[]",
                    year_date: data.movie.year,
                    modified: modified,
                    film_time: data.movie.time,
                    showtimes: data.movie.showtimes,
                    m3u8: JSON.stringify(data.episodes),
                    tags: JSON.stringify(category) 
                });
            }

            return res.send("Done!");

        } catch (error) {
            console.log(error);
            return res.status(500).send("Internal Server Error");
        }
    }

    async get_info(req, res) {
        try {
            const results = await filmModel.findAll({
                where: { 
                    type: "",
                },
                order: [['year_date', 'DESC']],
                limit: 10,
            });

            await Promise.all(results.map(async function(item) {
                try {
                    const response = await axios.get('https://ophim1.com/phim/' + item.slug);
                    const data = response.data;

                    var category = [];

                    await Promise.all(data.movie.category.map(async function (item) {
                        category.push(item.name)
                    }));

                    var episode_current = (data.movie.episode_current != null) ? data.movie.episode_current : 0;
                    var episode_total = (data.movie.episode_total != null) ? data.movie.episode_total : 0;

                    await filmModel.update({
                        type: data.movie.type,
                        status: data.movie.status,
                        description: data.movie.content,
                        film_time: data.movie.time,
                        episode_current: episode_current,
                        episode_total: episode_total,
                        m3u8: JSON.stringify(data.episodes),
                        tags: JSON.stringify(category) 
                    }, {
                        where: { slug: item.slug }
                    });

                } catch (error) {
                    console.error(error);
                }
            }));

            return res.send("Done!");

        } catch (error) {
            console.log(error);
            return res.status(500).send("Internal Server Error");
        }
    }

    async get_list(req, res) {
        try {
            const response = await axios.get('https://ophim1.com/danh-sach/phim-moi-cap-nhat?page=' + req.params.page);
            const data = response.data;
            data.items.forEach(async (item) => {
                const film = await filmModel.findOne({ where: { title: item.name } });
                if (!film) {
                    let modified = moment(item.modified.time).format('Y-MM-DD H:mm:ss');
                    await filmModel.create({
                        title: item.name,
                        origin_name: item.origin_name,
                        description: "",
                        type: "",
                        status: "",
                        showtimes: "",
                        slug: item.slug,
                        thumb_url: item.thumb_url,
                        poster_url: item.poster_url,
                        tags: "[]",
                        likes: "[]",
                        year_date: item.year,
                        modified: modified,
                        film_time: "?",
                        m3u8: "[]",
                    });
                }
            });
            res.json(response.data);
        } catch (error) {
            console.error(error);
        }
    }

    async get_big_list(req, res) {
        try {
            for (var i = req.params.from; i > req.params.from - 10; i--) {
                const response = await axios.get('https://ophim1.com/danh-sach/phim-moi-cap-nhat?page=' + i);
                const data = response.data;
                data.items.forEach(async (item) => {
                    const film = await filmModel.findOne({ where: { title: item.name } });
                    if (!film) {
                        let modified = moment(item.modified.time).format('Y-MM-DD H:mm:ss');
                        await filmModel.create({
                            title: item.name,
                            origin_name: item.origin_name,
                            description: "",
                            type: "",
                            status: "",
                            showtimes: "",
                            slug: item.slug,
                            thumb_url: item.thumb_url,
                            poster_url: item.poster_url,
                            tags: "[]",
                            likes: "[]",
                            year_date: item.year,
                            modified: modified,
                            film_time: "?",
                            m3u8: "[]",
                        });
                    }
                });
            }
        } catch (error) {
            console.error(error);
        }
    }
}

module.exports = new AjaxController;