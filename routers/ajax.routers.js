'use strict';
var express = require('express');
var router = express.Router();
var AjaxController = require("../controller/ajax.controller");
var authMiddleware = require("../middleware/authencation");

router.get('/search/:page/:search', [authMiddleware.isAuth, authMiddleware.getAuth], AjaxController.ajax_search);
router.get('/category/:page/:search', [authMiddleware.isAuth, authMiddleware.getAuth], AjaxController.ajax_category);

router.get('/set_image', AjaxController.set_image);
router.get('/get_image', AjaxController.get_image);

router.get('/loc_phim', AjaxController.loc_phim);
router.get('/removeImagesNotInSql', AjaxController.removeImagesNotInSql);

router.get('/get_by_slug/:slug', AjaxController.get_by_slug);
router.get('/get_info', AjaxController.get_info);
router.get('/get_list/:page', AjaxController.get_list);

module.exports = router;
