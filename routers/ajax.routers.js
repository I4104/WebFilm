'use strict';
var express = require('express');
var router = express.Router();
var AjaxController = require("../controller/ajax.controller");
var authMiddleware = require("../middleware/authencation");

router.get('/search/:search', [authMiddleware.isAuth, authMiddleware.getAuth], AjaxController.ajax_search);

module.exports = router;
