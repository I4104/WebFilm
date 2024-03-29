const filmModel = require("../models/films.model");
const axios = require('axios');
const moment = require('moment-timezone');
const { Op } = require('../config');
require('moment/locale/vi');

class HomeController {

    async index(req, res) {
        const user = res.locals.user;

        try {
            const latestFilm = await filmModel.findOne({
                where: {
                    id:  2642,
                },
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
                    episode_current: {
                        [Op.not]: "Tập 0"
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
                    episode_current: {
                        [Op.not]: "Tập 0"
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
                    episode_current: {
                        [Op.not]: "Tập 0"
                    },
                },
                order: [['year_date', 'DESC'], ['modified', 'DESC'], ['id', 'DESC']],
                limit: 48,
            });
            res.locals.anime = anime;
        } catch (error) {
            console.log(error);
        }

        res.locals.router = 'home';
        res.locals.title = 'Trang chủ - tv.knsea.com';
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

        // if (film.type == null || film.type == "" || film.type != "single") {
        //     try {
        //         const response = await axios.get('https://ophim1.com/phim/' + req.params.slug);
        //         const data = response.data;

        //         var category = [];

        //         data.movie.category.forEach(async (item) => {
        //             category.push(item.name)
        //         });

        //         var episode_current = (data.movie.episode_current != null) ? data.movie.episode_current : 0;
        //         var episode_total = (data.movie.episode_total != null) ? data.movie.episode_total : 0;
        //         var showtimes = (data.movie.showtimes != null) ? data.movie.showtimes : "";
                
        //         let modified = String(data.movie.modified.time).replace("T", " ").replace(".000Z", "");

        //         await filmModel.update({
        //             status: data.movie.status,
        //             episode_current: episode_current,
        //             episode_total: episode_total,
        //             showtimes: showtimes,
        //             modified: modified,
        //             m3u8: JSON.stringify(data.episodes),
        //             tags: JSON.stringify(category) 
        //         }, {
        //             where: { slug: req.params.slug }
        //         });
        //     } catch (error) {
        //         console.error(error);
        //     }
        // }
        

        // film = await filmModel.findOne({ where: { slug } });
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

        var liked = "";
        var like = JSON.parse(film.likes);
        if (like.includes(user.id)) {
            liked = "active";
        }

        res.locals.info = {
            slug: slug,
            liked: liked,
            episode: episode,
            title: film.title,
            modified: moment.tz(film.modified, 'Asia/Ho_Chi_Minh').locale('vi').format('HH:mm dddd (DD/MM/Y)').replace("thứ", "Thứ"),
            description: film.description,
            tags: JSON.parse(film.tags),
            time: film.film_time,
            origin_name: film.origin_name,
            episode_list: m3u8,
            seen: film.seen,
            year: film.year_date
        }
        filmModel.increment('seen', { by: 1, where: { id: film.id }});

        var list_recommend = [];
            try {
                var check = "";
                var title = film.title.split(" ").replace(":", "");

                if (title.length > 4) {
                    check = title.slice(0, 3).join(" ");
                } else {
                    check = title.slice(0, 2).join(" ");
                }
                var _check= check.normalize('NFD')
                        .replace(/[\u0300-\u036f]/g, '')
                        .replace(/đ/g, 'd').replace(/Đ/g, 'D').replace(/\s+/g, '-')
                        .replace(/-+/g, '-');

                const results = await filmModel.findAll({ 
                    where: {
                        [Op.and]: [
                            {
                                [Op.or]: [
                                    {
                                        title: {
                                            [Op.like]: '%'+ check +'%'
                                        }
                                    },
                                    {
                                        slug: {
                                            [Op.like]: '%'+ _check +'%'
                                        }
                                    }
                                ]
                            },
                            {
                                title: {
                                    [Op.not]: film.title,
                                }
                            }
                        ]
                    },
                    order: [['year_date', 'DESC'], ['id', 'DESC']],
                    limit: 24,
                });
                list_recommend = results;
            } catch (error) {
                console.log(error);
            }

            while (list_recommend.length < 24) {
                try {
                    const film_dexuat_player = await filmModel.findAll({
                        where: { 
                            m3u8: {
                                [Op.not]: "[]",
                            }
                        },
                        order: [['year_date', 'DESC'], ['id', 'DESC']],
                        limit: 24 - list_recommend.length,
                    });
                    if (film_dexuat_player.length === 0) {
                        break;
                    }
                    list_recommend = list_recommend.concat(film_dexuat_player);
                } catch (error) {
                    console.log(error);
                    break;
                }
            }

            res.locals.film_dexuat_player = list_recommend;

        res.locals.router = 'view';
        res.locals.title = 'Bạn đang xem: ' + film.title + " - tv.knsea.com";
        return res.render('movie/player.ejs');
    }

    async category(req, res) {
        const user = res.locals.user;
        var category = (req.params.category != null) ? req.params.category : "";
        var page = (req.params.page != null) ? req.params.page : 1;

        if (category == "series") {
            res.locals.category = "Phim Bộ";
        }
        if (category == "single") {
            res.locals.category = "Phim Lẻ";
        }
        if (category == "hoathinh") {
            res.locals.category = "Hoạt Hình";
        }

        res.locals.page = page;
        res.locals.cate = category; 
        res.locals.router = 'category';
        res.locals.title = 'Danh mục phim: ' + res.locals.category;
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
            type: film.type,
            episode: episode,
            m3u8: m3u8,
        };

        res.locals.film = data;
        res.locals.router = 'iframe';
        res.locals.title = 'Bạn đang xem: ' + film.title + " - tv.knsea.com";
        return res.render('movie/iframe.ejs');
    }

    async search(req, res) {
        const user = res.locals.user;
        const search = (req.params.search != null) ? req.params.search : "";
        const page = (req.params.page != null) ? req.params.page : 1;
        res.locals.search = search;
        res.locals.page = page;
        res.locals.router = 'search';
        res.locals.title = 'Tìm kiếm: ' + search;
        return res.render('search.ejs');
    }

    
}

module.exports = new HomeController;


