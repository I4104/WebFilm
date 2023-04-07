'use strict';
var express = require('express');
var router = express.Router();
var usersController = require("../controller/users.controller");
var authMiddleware = require("../middleware/authencation");

/* GET users listing. */
router.get('/login', authMiddleware.notAuth, usersController.login);
router.get('/register', authMiddleware.notAuth, usersController.register);
router.get('/profile', [authMiddleware.isAuth, authMiddleware.getAuth], usersController.profile);
router.get('/logout', usersController.logout);

router.post('/create', usersController.create);
router.post('/auth', usersController.auth);


module.exports = router;
