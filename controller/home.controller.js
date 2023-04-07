const filmModel = require("../models/films.model");
const axios = require('axios');

class HomeController {

    index(req, res) {
        const page = (req.params.page != null) ? req.params.page : 1;
    }

    view(req, res) {
        const slug = (req.params.slug != null) ? req.params.slug : 1;
        const episode = (req.params.episode != null) ? req.params.episode : 1;
    }

    list(req, res) {

    }

    async get_info(req, res) {
        try {
            const response = await axios.get('https://ophim1.com/phim/' + req.params.slug);
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
                where: { slug: req.params.slug }
            });

            return res.json(response.data);
        } catch (error) {
            console.error(error);
        }
    }

    async get_list(req, res) {
        try {
            const response = await axios.get('https://ophim1.com/danh-sach/phim-moi-cap-nhat?page=' + req.params.page);
            const data = response.data;
            data.items.forEach(async function (item) {
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
                data.items.forEach(async function (item) {
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


