'use strict';
var express = require('express');
var router = express.Router();
var HomeController = require("../controller/home.controller");
var authMiddleware = require("../middleware/authencation");

router.get('/', HomeController.index);

module.exports = router;
