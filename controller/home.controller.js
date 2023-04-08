const filmModel = require("../models/films.model");
const axios = require('axios');

class HomeController {

    async index(req, res) {
        const user = res.locals.user;
        try {
            const film = await filmModel.findAll({
                order: [['year_date', 'DESC'], ['seen', 'DESC']],
                limit: 20,
            });
            res.locals.film = film;
        } catch (error) {
            console.log(error);
        }

        return res.render('index');
    }

    async view(req, res) {
        const user = res.locals.user;
        const slug = (req.params.slug != null) ? req.params.slug : "";
        const episode = (req.params.episode != null) ? req.params.episode : 1;

        var film = await filmModel.findOne({ where: { slug } });
        if (!film) {
            return res.redirect("/");
        }

        if (film.type == null || film.type == "" || film.type != "single") {
            try {
                const response = await axios.get('https://ophim1.com/phim/' + req.params.slug);
                const data = response.data;

                var category = [];

                data.movie.category.forEach(async (item) => {
                    category.push(item.name)
                });

                var episode_current = (data.movie.episode_current != null) ? data.movie.episode_current : 0;
                var episode_total = (data.movie.episode_total != null) ? data.movie.episode_total : 0;

                await filmModel.update({
                    type: data.movie.type,
                    status: data.movie.status,
                    description: data.movie.content,
                    film_time: data.movie.time,
                    episode_current: episode_current,
                    episode_total: episode_total,
                    poster_url: data.movie.poster_url,
                    thumb_url: data.movie.thumb_url,
                    m3u8: JSON.stringify(data.episodes),
                    tags: JSON.stringify(category) 
                }, {
                    where: { slug: req.params.slug }
                });
            } catch (error) {
                console.error(error);
            }
        }
        

        film = await filmModel.findOne({ where: { slug } });
        var m3u8_json = JSON.parse(film.m3u8);
        var m3u8 = [];
        var item = m3u8_json[0];
        for (var j = 0; j < item.server_data.length; j++) {
            var epl = {
                name: item.server_data[j].name,
                episode: item.server_data[j].slug
            }  
            m3u8.push(epl); 
        }

        res.locals.info = {
            slug: slug,
            episode: episode,
            title: film.title,
            description: film.description,
            tags: JSON.parse(film.tags),
            time: film.film_time,
            episode_list: m3u8,
            year: film.year_date
        }

        return res.render('movie/player.ejs');
    }

    async iframe(req, res) {
        const slug = (req.params.slug != null) ? req.params.slug : "";
        const episode = (req.params.episode != null) ? req.params.episode : 1;

        const film = await filmModel.findOne({ where: { slug } });

        var m3u8_json = JSON.parse(film.m3u8);
        var m3u8 = "";
        for (var i = 0; i < m3u8_json.length; i++) {
            var item = m3u8_json[i];
            for (var j = 0; j < item.server_data.length; j++) {
                var ep = item.server_data[j];
                if (ep.slug == episode) {
                    m3u8 = ep.link_m3u8;
                    break;
                }
            }
            if (m3u8) {
                break;
            }
        }

        var data = {
            title: film.title,
            poster_url: film.poster_url,
            thumb_url: film.thumb_url,
            slug: slug,
            episode: episode,
            m3u8: m3u8,
        };

        res.locals.film = data;
        return res.render('movie/iframe.ejs');
    }


    async get_info(req, res) {
        filmModel.findAll({
            where: { 
                type: "",
            },
            order: [['year_date', 'DESC']],
            limit: 10,
        }).then((results) => {
            results.forEach(async function(item) {
                try {
                    const response = await axios.get('https://ophim1.com/phim/' + item.slug);
                    const data = response.data;

                    var category = [];

                    data.movie.category.forEach(async function (item) {
                        category.push(item.name)
                    });

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
                    console.log(item.slug);
                } catch (error) {
                    console.error(error);
                }
            });
        });
        return res.send("Done!");
    }

    async get_list(req, res) {
        try {
            const response = await axios.get('https://ophim1.com/danh-sach/phim-moi-cap-nhat?page=' + req.params.page);
            const data = response.data;
            data.items.forEach(async (item) => {
                const film = await filmModel.findOne({ where: { title: item.name } });
                if (!film) {
                    await filmModel.create({
                        title: item.name,
                        origin_name: item.origin_name,
                        description: "",
                        slug: item.slug,
                        thumb_url: item.thumb_url,
                        poster_url: item.poster_url,
                        tags: "[]",
                        likes: "[]",
                        year_date: item.year,
                        modified: item.modified.time,
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
                        await filmModel.create({
                            title: item.name,
                            origin_name: item.origin_name,
                            description: "",
                            slug: item.slug,
                            thumb_url: item.thumb_url,
                            poster_url: item.poster_url,
                            tags: "[]",
                            likes: "[]",
                            year_date: item.year,
                            modified: item.modified.time,
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

module.exports = new HomeController;


