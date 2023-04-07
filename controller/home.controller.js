const filmModel = require("../models/films.model");
const axios = require('axios');

class HomeController {

    index(req, res) {
        let config = {
            method: 'get',
            maxBodyLength: Infinity,
            url: 'https://ophim1.com/danh-sach/phim-moi-cap-nhat?page=1',
            headers: {}
        };
        axios.request(config)
            .then((response) => {
                return res.json(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
    }

    list(req, res) {

    }

    async get_info(req, res) {

    }

    async get_api(req, res) {
                
    }

}

module.exports = new HomeController;


