const userModel = require("../models/users.model");
const filmModel = require("../models/films.model");
const axios = require('axios');
const moment = require('moment');
const { Op } = require('../config');

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
                    html += '<div class="col-lg-2 item p-3">\
                        <a class="position-relative rounded" href="/phim/' + item.slug + '/' + episode[0].server_data[0].slug + '">\
                            <figure class="rounded">\
                                <img class="bgi-no-repeat bgi-position-center bgi-size-cover w-100 h-150px h-sm-175px h-md-275px h-lg-350px" src="https://img.ophim1.com/uploads/movies/' + item.thumb_url.split("/").pop() + '">\
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
}

module.exports = new AjaxController;