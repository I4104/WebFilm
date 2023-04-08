'use strict';
var express = require('express');
var router = express.Router();
var HomeController = require("../controller/home.controller");
var authMiddleware = require("../middleware/authencation");

// localhost:3000/1
router.get('/page/:page', [authMiddleware.isAuth, authMiddleware.getAuth], HomeController.index);
router.get('/phim/:slug/:episode', [authMiddleware.isAuth, authMiddleware.getAuth], HomeController.view);

router.get("/iframe/:slug/:episode", HomeController.iframe)

router.get('/get_info', HomeController.get_info);
router.get('/get_list/:page', HomeController.get_list);
router.get('/get_big_list/:from', HomeController.get_big_list);

router.get('/', [authMiddleware.isAuth, authMiddleware.getAuth], HomeController.index);

module.exports = router;
