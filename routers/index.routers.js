'use strict';
var express = require('express');
var router = express.Router();
var HomeController = require("../controller/home.controller");
var authMiddleware = require("../middleware/authencation");

// localhost:3000/1
router.get('/page/:page', [authMiddleware.isAuth, authMiddleware.getAuth], HomeController.index);
router.get('/phim/:slug/:episode', [authMiddleware.isAuth, authMiddleware.getAuth], HomeController.view);
router.get("/iframe/:slug/:episode", HomeController.iframe)

router.get('/category/:category', [authMiddleware.isAuth, authMiddleware.getAuth], HomeController.category);
router.get('/search/:search', [authMiddleware.isAuth, authMiddleware.getAuth], HomeController.search);

router.get('/', [authMiddleware.getAuth], HomeController.index);

module.exports = router;
