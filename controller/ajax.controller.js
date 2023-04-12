const userModel = require("../models/users.model");
const filmModel = require("../models/films.model");
const logs = require("../models/logs.model");
const axios = require('axios');
const moment = require('moment-timezone');
const { Op } = require('../config');
const fs = require('fs');
const path = require('path');
const sharp = require('sharp');

class AjaxController {

    async ajax_search(req, res) {
        var page = parseInt(req.params.page) || 1; 
        if (page < 1) {
            page = 1
        } 
        const perPage = 40; 
        const offset = (page - 1) * perPage; 

        try {
            var html = "";
            var slug = req.params.search.normalize('NFD')
                    .replace(/[\u0300-\u036f]/g, '')
                    .replace(/đ/g, 'd').replace(/Đ/g, 'D').replace(/\s+/g, '-')
                    .replace(/-+/g, '-');

            const results = await filmModel.findAndCountAll({ 
                where: {
                    [Op.or]: {
                        title: {
                            [Op.like]: '%'+ req.params.search +'%'
                        },
                        tags: {
                            [Op.like]: '%'+ req.params.search +'%'
                        },
                        slug: {
                            [Op.like]: '%'+ slug +'%'
                        },
                    }
                },
                order: [['id', 'DESC']],
                offset: offset,
                limit: perPage
            });

            const totalPages = Math.ceil(results.count / perPage);

            if (results.count > 0) {
                for (const item of results.rows) {
                    var episode = JSON.parse(item.m3u8);
                    html += '<div class="col-lg-2 col-md-4 col-sm-4 col-6 item item-movie-page p-3">\
                        <a class="position-relative d-inline-block rounded" href="/phim/' + item.slug + '/' + episode[0].server_data[0].slug + '">\
                            <figure class="rounded">\
                                <img class="bgi-no-repeat bgi-position-center bgi-size-cover w-100 h-250px h-sm-275px h-md-350px h-lg-300px" src="' + item.thumb_url + '">\
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
                html += '<div class="d-flex justify-content-between align-items-center flex-wrap">';

                html += '\
                <div class="d-flex align-items-center py-3">\
                    <span class="text-muted">Hiển thị '+ perPage +' của '+ results.count +' kết quả</span>\
                </div>';

                if (page === 1) {
                    html += '<div class="d-flex flex-wrap py-2 mr-3"><ul class="pagination">\
                            <li class="paginate_button page-item previous"><a href="" class="btn btn-icon btn-sm page-link btn-light-primary me-2 my-1" disabled><i class="fas fa-angle-double-left icon-xs"></i></a></li>\
                            <li class="paginate_button page-item previous"><a href="" class="btn btn-icon btn-sm page-link btn-light-primary me-2 my-1" disabled><i class="fas fa-angle-left icon-xs"></i></a></li>';
                } else {
                    html += '<div class="d-flex flex-wrap py-2 mr-3"><ul class="pagination">\
                                <li class="paginate_button page-item previous"><a href="/search/1/' + req.params.search + '" class="btn btn-icon btn-sm page-link btn-light-primary me-2 my-1"><i class="fas fa-angle-double-left icon-xs"></i></a></li>\
                                <li class="paginate_button page-item previous"><a href="/search/'+ (page - 1) +'/' + req.params.search + '" class="btn btn-icon btn-sm page-link btn-light-primary me-2 my-1"><i class="fas fa-angle-left icon-xs"></i></a></li>';
                }

                if (totalPages <= 7) {
                    for (let i = 1; i <= totalPages; i++) {
                        if (i === page) {
                            html += `<li class="paginate_button page-item active"><a href="/search/${i}/` + req.params.search + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary active me-2 my-1">${i}</a></li>`;
                        } else {
                            html += `<li class="paginate_button page-item"><a href="/search/${i}/` + req.params.search + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">${i}</a></li>`;
                        }
                    }
                } else {
                    if (page <= 4) {
                        for (let i = 1; i <= 5; i++) {
                            if (i === page) {
                                html += `<li class="paginate_button page-item active"><a href="/search/${i}/` + req.params.search + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary active me-2 my-1">${i}</a></li>`;
                            } else {
                                html += `<li class="paginate_button page-item"><a href="/search/${i}/` + req.params.search + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">${i}</a></li>`;
                            }
                        }
                        html += '<li class="paginate_button page-item"><button class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">...</button></li>\
                                <li class="paginate_button page-item"><a href="/search/' + totalPages + '/' + req.params.search + '" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">' + totalPages + '</a></li>';
                    } else if (page >= totalPages - 3) {
                        html += '<li class="paginate_button page-item"><a href="/search/1/' + req.params.search + '" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">1</a></li>\
                                <li class="paginate_button page-item"><button class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">...</button></li>';

                        for (let i = totalPages - 4; i <= totalPages; i++) {
                            if (i === page) {
                                html += `<li class="paginate_button page-item active"><a href="/search/${i}/` + req.params.search + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary active me-2 my-1">${i}</a></li>`;
                            } else {
                                html += `<li class="paginate_button page-item"><a href="/search/${i}/` + req.params.search + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">${i}</a></li>`;
                            }
                        }
                    } else {
                        html += '<li class="paginate_button page-item"><a href="/search/1/' + req.params.search + '" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">1</a></li>\
                                <li class="paginate_button page-item"><button class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">...</button></li>';

                        for (let i = page - 2; i <= page + 2; i++) {
                            if (i === page) {
                                html += `<li class="paginate_button page-item active"><a href="/search/${i}/` + req.params.search + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary active me-2 my-1">${i}</a></li>`;
                            } else {
                                html += `<li class="paginate_button page-item"><a href="/search/${i}/` + req.params.search + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">${i}</a></li>`;
                            }
                        }
                        html += '<li class="paginate_button page-item"><button class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">...</button></li>\
                        <li class="paginate_button page-item"><a href="/search/' + totalPages + '/' + req.params.search + '" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">' + totalPages + '</a></li>';
                    }
                }

                if (page === totalPages) {
                    html += '<li class="paginate_button page-item next"><a href="" class="btn btn-icon btn-sm page-link btn-light-primary me-2 my-1" disabled><i class="fas fa-angle-right icon-xs"></i></a></li>\
                            <li class="paginate_button page-item next"><a href = "#" class = "btn btn-icon btn-sm page-link btn-light-primary my-1" disabled><i class="fas fa-angle-double-right icon-xs"></i></a></li>\
                    </ul></div></div>';
                } else {
                    html += '<li class="paginate_button page-item next"><a href="/search/'+ (page + 1) +'/' + req.params.search + '" class="btn btn-icon btn-sm page-link btn-light-primary me-2 my-1"><i class="fas fa-angle-right icon-xs"></i></a></li>\
                            <li class="paginate_button page-item next"><a href = "/search/'+ (totalPages) +'/' + req.params.search + '" class = "btn btn-icon btn-sm page-link btn-light-primary my-1"><i class="fas fa-angle-double-right icon-xs"></i></a></li>\
                    </ul></div></div>';
                }

            } else {
                html += '<div class="col-lg-12 text-center">\
                        <img src="/assets/icons/empty.png" alt=""></br>\
                        Không có dữ liệu\
                    </div>';
            }
            return res.send(html);
        } catch (error) {
            console.log(error);
            return res.send(error);
        }  
    }

    async ajax_category(req, res) {
        var page = parseInt(req.params.page) || 1;
        if (page < 1) {
            page = 1
        } 
        const perPage = 40; 
        const offset = (page - 1) * perPage;

        try {
            var html = "";
            const results = await filmModel.findAndCountAll({ 
                where: { 
                    type: {
                        [Op.eq]: req.params.category
                    },
                },
                order: [['id', 'DESC']],
                offset: offset,
                limit: perPage
            });

            const totalPages = Math.ceil(results.count / perPage);

            if (results.count > 0) {
                for (const item of results.rows) {
                    var episode = JSON.parse(item.m3u8);
                    html += '<div class="col-lg-2 col-md-4 col-sm-4 col-6 item item-movie-page p-3">\
                        <a class="position-relative d-inline-block rounded" href="/phim/' + item.slug + '/' + episode[0].server_data[0].slug + '">\
                            <figure class="rounded">\
                                <img class="bgi-no-repeat bgi-position-center bgi-size-cover w-100 h-250px h-sm-275px h-md-350px h-lg-300px" src="' + item.thumb_url + '">\
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
                html += '<div class="d-flex justify-content-between align-items-center flex-wrap">';

                html += '\
                <div class="d-flex align-items-center py-3">\
                    <span class="text-muted">Hiển thị '+ perPage +' của '+ results.count +' kết quả</span>\
                </div>';

                if (page === 1) {
                    html += '<div class="d-flex flex-wrap py-2 mr-3"><ul class="pagination">\
                            <li class="paginate_button page-item previous"><a href="" class="btn btn-icon btn-sm page-link btn-light-primary me-2 my-1" disabled><i class="fas fa-angle-double-left icon-xs"></i></a></li>\
                            <li class="paginate_button page-item previous"><a href="" class="btn btn-icon btn-sm page-link btn-light-primary me-2 my-1" disabled><i class="fas fa-angle-left icon-xs"></i></a></li>';
                } else {
                    html += '<div class="d-flex flex-wrap py-2 mr-3"><ul class="pagination">\
                                <li class="paginate_button page-item previous"><a href="/search/1/' + req.params.search + '" class="btn btn-icon btn-sm page-link btn-light-primary me-2 my-1"><i class="fas fa-angle-double-left icon-xs"></i></a></li>\
                                <li class="paginate_button page-item previous"><a href="/search/'+ (page - 1) +'/' + req.params.search + '" class="btn btn-icon btn-sm page-link btn-light-primary me-2 my-1"><i class="fas fa-angle-left icon-xs"></i></a></li>';
                }

                if (totalPages <= 7) {
                    for (let i = 1; i <= totalPages; i++) {
                        if (i === page) {
                            html += `<li class="paginate_button page-item active"><a href="/category/${i}/` + req.params.category + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary active me-2 my-1">${i}</a></li>`;
                        } else {
                            html += `<li class="paginate_button page-item"><a href="/category/${i}/` + req.params.category + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">${i}</a></li>`;
                        }
                    }
                } else {
                    if (page <= 4) {
                        for (let i = 1; i <= 5; i++) {
                            if (i === page) {
                                html += `<li class="paginate_button page-item active"><a href="/category/${i}/` + req.params.category + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary active me-2 my-1">${i}</a></li>`;
                            } else {
                                html += `<li class="paginate_button page-item"><a href="/category/${i}/` + req.params.category + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">${i}</a></li>`;
                            }
                        }
                        html += '<li class="paginate_button page-item"><button class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">...</button></li>\
                                <li class="paginate_button page-item"><a href="/category/' + totalPages + '/' + req.params.category + '" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">' + totalPages + '</a></li>';
                    } else if (page >= totalPages - 3) {
                        html += '<li class="paginate_button page-item"><a href="/category/1/' + req.params.category + '" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">1</a></li>\
                                <li class="paginate_button page-item"><button class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">...</button></li>';

                        for (let i = totalPages - 4; i <= totalPages; i++) {
                            if (i === page) {
                                html += `<li class="paginate_button page-item active"><a href="/category/${i}/` + req.params.category + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary active me-2 my-1">${i}</a></li>`;
                            } else {
                                html += `<li class="paginate_button page-item"><a href="/category/${i}/` + req.params.category + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">${i}</a></li>`;
                            }
                        }
                    } else {
                        html += '<li class="paginate_button page-item"><a href="/category/1/' + req.params.category + '" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">1</a></li>\
                                <li class="paginate_button page-item"><button class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">...</button></li>';

                        for (let i = page - 2; i <= page + 2; i++) {
                            if (i === page) {
                                html += `<li class="paginate_button page-item active"><a href="/category/${i}/` + req.params.category + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary active me-2 my-1">${i}</a></li>`;
                            } else {
                                html += `<li class="paginate_button page-item"><a href="/category/${i}/` + req.params.category + `" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">${i}</a></li>`;
                            }
                        }
                        html += '<li class="paginate_button page-item"><button class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">...</button></li>\
                        <li class="paginate_button page-item"><a href="/category/' + totalPages + '/' + req.params.category + '" class="btn btn-icon btn-sm page-link border-0 btn-hover-primary me-2 my-1">' + totalPages + '</a></li>';
                    }
                }

                if (page === totalPages) {
                    html += '<li class="paginate_button page-item next"><a href="" class="btn btn-icon btn-sm page-link btn-light-primary me-2 my-1" disabled><i class="fas fa-angle-right icon-xs"></i></a></li>\
                            <li class="paginate_button page-item next"><a href = "#" class = "btn btn-icon btn-sm page-link btn-light-primary my-1" disabled><i class="fas fa-angle-double-right icon-xs"></i></a></li>\
                    </ul></div>';
                } else {
                    html += '<li class="paginate_button page-item next"><a href="/category/'+ (page + 1) +'/' + req.params.category + '" class="btn btn-icon btn-sm page-link btn-light-primary me-2 my-1"><i class="fas fa-angle-right icon-xs"></i></a></li>\
                            <li class="paginate_button page-item next"><a href = "/category/'+ (totalPages) +'/' + req.params.category + '" class = "btn btn-icon btn-sm page-link btn-light-primary my-1"><i class="fas fa-angle-double-right icon-xs"></i></a></li>\
                    </ul></div>';
                }

            } else {
                html += '<div class="col-lg-12 text-center">\
                        <img src="/assets/icons/empty.png" alt=""></br>\
                        Không có dữ liệu\
                    </div>';
            }
            return res.send(html);
        } catch (error) {
            console.log(error);
            return res.send(error);
        }  
    }


    async bookmark(req, res) {
        const user = res.locals.user;

        if (user == null) {
            return res.json({
                error: 1,
                type: "error", 
                buttontext: "Ok", 
                reload: true,
                message: 'Bạn cần đăng nhập để tiếp tục!'
            });
        }

        const slug = req.params.slug;
        const film = await filmModel.findOne({ where: { slug } });
        
        if (!film) {
            return res.json({
                error: 2,
                type: "error", 
                buttontext: "Ok", 
                reload: true,
                message: 'Không tìm thấy phim!'
            });
        }

        let likes = [];
        if (film.likes) {
            likes = JSON.parse(film.likes);
        }

        let message = "";
        if (likes.includes(user.id)) {
            likes = likes.filter(item => item !== user.id);
            message = "Đã xóa khỏi danh sách yêu thích";
        } else {
            likes.push(user.id);
            message = "Đã thêm vào danh sách yêu thích";
        }

        await filmModel.update({
            likes: JSON.stringify(likes),
        }, {
            where: { id: film.id }
        });

        return res.json({
            error: 0,
            type: "success", 
            buttontext: "Ok", 
            reload: false,
            message: message
        });
    }

    async set_image(req, res) {
        const publicPath = path.join(__dirname, '../public');
        const uploadsPath = path.join(publicPath, 'uploads');

        const results = await filmModel.findAll({
            where: {
                thumb_url: {
                    [Op.like]: '%https://img.ophim1.com/uploads/movies%'
                }
            },
            limit: 200,
        });
        await Promise.all(results.map(async function(item) {
            const thumbUrl = item.thumb_url.split('/').pop();
            const posterUrl = item.poster_url.split('/').pop();

            if (fs.existsSync(path.join(uploadsPath, thumbUrl))) {
                await filmModel.update({
                    thumb_url: '/uploads/' + item.thumb_url.split("/").pop(),
                }, {
                    where: { id: item.id }
                });
            }
            if (fs.existsSync(path.join(uploadsPath, posterUrl))) {
                await filmModel.update({
                    poster_url: '/uploads/' + item.poster_url.split("/").pop(),
                }, {
                    where: { id: item.id }
                })
            }
        }));

        return res.send('Done!');
    }

    async get_image(req, res) {
        try {
            const publicPath = path.join(__dirname, '../public');
            const uploadsPath = path.join(publicPath, 'uploads');

            if (!fs.existsSync(uploadsPath)) {
                fs.mkdirSync(uploadsPath);
            }
            const results = await filmModel.findAll({
                where: {
                    thumb_url: {
                        [Op.like]: '%https://img.ophim1.com/uploads/movies%'
                    }
                },
                order: [['year_date', 'DESC']],
                limit: 10,
            });

            await Promise.allSettled(results.map(async function(item) {
                const thumbUrl = item.thumb_url.split("/").pop();
                const posterUrl = item.poster_url.split("/").pop();

                await Promise.all([
                    new Promise((resolve, reject) => {
                        axios({
                            url: "https://img.ophim1.com/uploads/movies/" + thumbUrl,
                            responseType: 'stream',
                        }).then(async (response) => {
                            response.data.pipe(fs.createWriteStream(path.join(uploadsPath, thumbUrl)));
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
                            responseType: 'arraybuffer',
                        }).then(async (response) => {
                            const buffer = await sharp(response.data)
                                .jpeg({ quality: 80 })
                                .toBuffer();
                            fs.writeFile(path.join(uploadsPath, posterUrl), buffer, (err) => {
                                if (err) {
                                    console.error(err);
                                    reject(err);
                                } else {
                                    console.log('Poster downloaded and compressed successfully');
                                    resolve();
                                }
                            });
                        }).catch(error => {
                            console.error(error);
                            reject(error);
                        });
                    })
                ]);

                await Promise.all([
                    filmModel.update({
                        thumb_url: '/uploads/' + item.thumb_url.split("/").pop(),
                    }, {
                        where: { id: item.id }
                    }),

                    filmModel.update({
                        poster_url: '/uploads/' + item.poster_url.split("/").pop(),
                    }, {
                        where: { id: item.id }
                    })
                ]);
            }));

            await Promise.all(results.map(async function(item) {
                await filmModel.update({
                    thumb_url: '/uploads/' + item.thumb_url.split("/").pop(),
                    poster_url: '/uploads/' + item.poster_url.split("/").pop(),
                }, {
                    where: { id: item.id }
                });
            }));
        } catch (error) {
            console.log(error);
            return res.status(500).send("Internal Server Error");
        }
        
        return res.send("Done!");
    }

    async update_series(req, res) {
        try {
            let offset = 0;
            let limit = 5;
            let done = false;

            while (!done) {
                const results = await filmModel.findAll({
                    where: {
                        [Op.or]: [{
                                type: "series"
                            },
                            {
                                type: "hoathinh"
                            }
                        ],
                        status: "ongoing",
                        modified: {
                            [Op.like]: '%2023-%'
                        }
                    },
                    order: [
                        ['year_date', 'DESC'],
                        ['id', 'DESC']
                    ],
                    offset,
                    limit
                });

                if (results.length > 0) {
                    await Promise.all(results.map(async function(item) {
                        const response = await axios.get('https://ophim1.com/phim/' + item.slug);
                        const data = response.data;

                        var episode_current = (data.movie.episode_current != null) ? data.movie.episode_current : 0;
                        var episode_total = (data.movie.episode_total != null) ? data.movie.episode_total : 0;
                        var showtimes = (data.movie.showtimes != null) ? data.movie.showtimes : "";
                        let modified = String(data.movie.modified.time).replace("T", " ").replace(".000Z", "");

                        if (item.modified != modified) {
                            await filmModel.update({
                                status: data.movie.status,
                                episode_current: episode_current,
                                episode_total: episode_total,
                                showtimes: showtimes,
                                modified: modified,
                                m3u8: JSON.stringify(data.episodes),
                            }, {
                                where: {
                                    id: item.id
                                }
                            });

                            await logs.create({
                                content: "Update Series: " + item.title + " - Current episode: " + episode_current + " - Modified: " + modified,
                                date: moment().tz('Asia/Ho_Chi_Minh').format('Y-MM-DD HH:mm:ss')
                            });
                        }
                    }));
                } else {
                    done = true;
                }

                offset += limit;
            }

            return res.send("Done!");
        } catch (error) {
            return res.send(error);
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
                return res.json({
                    status: 0,
                    message: "exists",
                });
            } else {
                const response = await axios.get('https://ophim1.com/phim/' + req.params.slug);
                const data = response.data;

                var category = [];

                await Promise.all(data.movie.category.map(async function (item) {
                    category.push(item.name)
                }));

                let modified = String(data.movie.modified.time).replace("T", " ").replace(".000Z", "");
                
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

                await logs.create({ date: moment().tz('Asia/Ho_Chi_Minh').format('Y-MM-DD HH:mm:ss'), content: "Get By Slug: " + req.params.slug + " - Name: " + data.movie.name });
            }
            return res.json({
                status: 1,
                message: "Found!",
            });

        } catch (error) {
            return res.json({
                status: -1,
                message: "Not Found!",
            });            
        }
    }

    async get_info(req, res) {
        try {
            const results = await filmModel.findAll({
                where: { 
                    type: "",
                },
                order: [['year_date', 'DESC']],
                limit: 50,
            });

            await Promise.all(results.map(async function(item) {
                try {
                    const response = await axios.get('https://ophim1.com/phim/' + item.slug);
                    const data = response.data;

                    var category = [];

                    await Promise.all(data.movie.category.map(async function (item) {
                        category.push(item.name)
                    }));

                    if (category.includes("Phim 18+") || data.movie.status == "trailer") {
                        await filmModel.destroy({ where: { slug: item.slug } });
                    } else {
                        if (category) {
                            var episode_current = (data.movie.episode_current != null) ? data.movie.episode_current : 0;
                            var episode_total = (data.movie.episode_total != null) ? data.movie.episode_total : 0;
                            
                            await filmModel.update({
                                type: data.movie.type,
                                status: data.movie.status,
                                description: data.movie.content,
                                film_time: data.movie.time,
                                showtimes: data.movie.showtimes,
                                thumb_url: data.movie.thumb_url,
                                poster_url: data.movie.poster_url,
                                episode_current: episode_current,
                                episode_total: episode_total,
                                m3u8: JSON.stringify(data.episodes),
                                tags: JSON.stringify(category) 
                            }, {
                                where: { slug: item.slug }
                            });
                        }
                    }

                    await logs.create({ date: moment().tz('Asia/Ho_Chi_Minh').format('Y-MM-DD HH:mm:ss'), content: "Get Info: " + item.slug + " - Name: " + data.movie.name });
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

    async loc_phim(req, res) {
        try {
            const filmsToDelete = await filmModel.findAll({
                where: {
                    [Op.and]: [
                        {
                            type: { [Op.ne]: "hoathinh" }
                        },
                        {
                            [Op.or]: [
                                {
                                    status: { [Op.eq]: "trailer" }
                                },
                                {
                                    tags: { [Op.like]: '%Phim 18+%' },
                                },
                            ]
                        }
                    ],
                },
            });

            await Promise.all(
                filmsToDelete.map(async (film) => {
                    await film.destroy();
                })

            );
            await logs.create({ date: moment().tz('Asia/Ho_Chi_Minh').format('Y-MM-DD HH:mm:ss'), content: "Delete 18+ tags" });
            return res.send('Done!');

            await Promise.all(filmsToDelete.map(async (film) => {
                const thumbUrl = path.join(__dirname, '../public/uploads', film.thumb_url.split("/").pop());
                const posterUrl = path.join(__dirname, '../public/uploads', film.poster_url.split("/").pop());
                try {
                    await fs.promises.unlink(thumbUrl);
                    await logs.create({ date: moment().tz('Asia/Ho_Chi_Minh').format('Y-MM-DD HH:mm:ss'), content: "Delete image: " + thumbUrl });
                    await fs.promises.unlink(posterUrl);
                    await logs.create({ date: moment().tz('Asia/Ho_Chi_Minh').format('Y-MM-DD HH:mm:ss'), content: "Delete image: " + posterUrl });
                    await film.destroy();
                    console.log(`Deleted film with id ${film.id}`);
                } catch (error) {
                    console.error(`Error deleting film with id ${film.id}: ${error}`);
                }
            }));
        } catch (error) {
            console.error(error);
        }

        return res.send("Done!");
    }

    async removeImagesNotInSql(req, res) {
        try {
            const fs = require('fs');
            const path = require('path');
            const publicPath = path.join(__dirname, '../public');
            const uploadsPath = path.join(publicPath, 'uploads');

            const imagesInFolder = await fs.promises.readdir(uploadsPath);

            const results = await filmModel.findAll({
                attributes: ['thumb_url', 'poster_url']
            });
            const imagesInSql = results.map(item => item.thumb_url).concat(results.map(item => item.poster_url));

            const imagesToDelete = imagesInFolder.filter(image => !imagesInSql.includes(`/uploads/${image}`));

            await Promise.all(imagesToDelete.map(async (image) => {
                await fs.promises.unlink(path.join(uploadsPath, image));
                await logs.create({ date: moment().tz('Asia/Ho_Chi_Minh').format('Y-MM-DD HH:mm:ss'), content: "Delete image: " + image });
            }));

            console.log(`Removed ${imagesToDelete.length} images`);

        } catch (error) {
            console.error(error);
        }
    }

    async get_list(req, res) {
        try {
            const response = await axios.get('https://ophim1.com/danh-sach/phim-moi-cap-nhat?page=' + req.params.page);
            const data = response.data;
            data.items.forEach(async (item) => {
                const film = await filmModel.findOne({ where: { slug: item.slug } });
                if (!film) {
                    if (item.year > 2015) {

                        let modified = moment(item.modified.time).tz('Asia/Ho_Chi_Minh').format('Y-MM-DD HH:mm:ss');

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
                }
            });
            res.json(response.data);
            await logs.create({ date: moment().tz('Asia/Ho_Chi_Minh').format('Y-MM-DD HH:mm:ss'), content: "Get list, Items: " + data.items.length });
        } catch (error) {
            console.error(error);
        }
    }
}

module.exports = new AjaxController;