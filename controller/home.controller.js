const filmModel = require("../models/films.model");
const axios = require('axios');
const moment = require('moment');
const { Op } = require('../config');

class HomeController {

    async index(req, res) {
        const user = res.locals.user;

        try {
            const latestFilm = await filmModel.findOne({
                where: {
                    m3u8: {
                        [Op.not]: "[]",
                    },
                    thumb_url: {
                        [Op.notLike]: "%https://img.ophim1.com/uploads/movies%",
                    },
                },
                order: [
                    ['year_date', 'DESC'],
                    ['modified', 'DESC'],
                    ['id', 'DESC']
                ],
            });
            res.locals.film_banner = latestFilm;
        } catch (error) {
            console.log(error);
        }

        try {
            const film_hot = await filmModel.findAll({
                where: { 
                    m3u8: {
                        [Op.not]: "[]",
                    },
                    thumb_url: {
                        [Op.notLike]: "%https://img.ophim1.com/uploads/movies%",
                    },
                },
                order: [['seen', 'DESC']],
                limit: 24,
            });
            res.locals.film_hot = film_hot;
        } catch (error) {
            console.log(error);
        }

        try {
            const film_dexuat = await filmModel.findAll({
                where: { 
                    m3u8: {
                        [Op.not]: "[]",
                    },
                    thumb_url: {
                        [Op.notLike]: "%https://img.ophim1.com/uploads/movies%",
                    },
                },
                order: [['id', 'DESC']],
                limit: 24,
            });
            res.locals.film_dexuat = film_dexuat;
        } catch (error) {
            console.log(error);
        }

        try {
            const anime = await filmModel.findAll({
                where: { 
                    m3u8: {
                        [Op.not]: "[]",
                    },
                    thumb_url: {
                        [Op.notLike]: "%https://img.ophim1.com/uploads/movies%",
                    },
                    type: {
                        [Op.eq]: "hoathinh",
                    },
                },
                order: [['year_date', 'DESC'], ['modified', 'DESC'], ['id', 'DESC']],
                limit: 24,
            });
            res.locals.anime = anime;
        } catch (error) {
            console.log(error);
        }

        res.locals.router = 'home';
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
                var showtimes = (data.movie.showtimes != null) ? data.movie.showtimes : "";
                let modified = moment(data.movie.modified.time).format('Y-MM-DD H:mm:ss');

                await filmModel.update({
                    status: data.movie.status,
                    episode_current: episode_current,
                    episode_total: episode_total,
                    showtimes: showtimes,
                    modified: modified,
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
            origin_name: film.origin_name,
            episode_list: m3u8,
            year: film.year_date
        }

        try {
            const film_dexuat_player = await filmModel.findAll({
                where: { 
                    m3u8: {
                        [Op.not]: "[]",
                    }
                },
                order: [['year_date', 'DESC'], ['id', 'DESC']],
                limit: 24,
            });
            res.locals.film_dexuat_player = film_dexuat_player;
        } catch (error) {
            console.log(error);
        }

        res.locals.router = 'view';
        return res.render('movie/player.ejs');
    }

    async category(req, res) {
        const user = res.locals.user;
        var category = (req.params.category != null) ? req.params.category : "";

        if (category == "series") {
            res.locals.category = "Phim Bộ";
        }
        if (category == "single") {
            res.locals.category = "Phim Lẻ";
        }
        if (category == "anime") {
            category = "hoathinh";
            res.locals.category = "Hoạt Hình";
        }

        try {
            const info_category = await filmModel.findAll({
                where: { 
                    type: category,
                },
                order: [['year_date', 'DESC'], ['id', 'DESC']],
                limit: 24,
            });
            res.locals.info_category = info_category;
        } catch (error) {
            console.log(error);
        }

        res.locals.router = 'category';
        return res.render("category.ejs");
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
        res.locals.router = 'iframe';
        return res.render('movie/iframe.ejs');
    }

    async search(req, res) {
        const user = res.locals.user;
        const search = (req.params.search != null) ? req.params.search : "";
        const page = (req.params.page != null) ? req.params.page : 1;
        res.locals.search = search;
        res.locals.page = page;
        res.locals.router = 'search';
        return res.render('search.ejs');
    }

    
}

module.exports = new HomeController;


