'use strict';
var express = require('express');
var router = express.Router();
var HomeController = require("../controller/home.controller");
var authMiddleware = require("../middleware/authencation");

router.get('/:page', HomeController.index);
router.get('/phim/:slug/:episode', HomeController.view);

router.get('/get_list/:page', HomeController.get_list);
router.get('/get_big_list/:from', HomeController.get_big_list);

router.get('/info/:slug', HomeController.get_info);
router.get('/', HomeController.index);

module.exports = router;
