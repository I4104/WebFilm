//  Test thử xem sao
'use strict';
var debug = require('debug')('my express app');

const express = require('express');
const session = require('express-session');
const flash = require('connect-flash');

var path = require('path');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');

const RedisStore = require('connect-redis')(session);
const redisClient = require('redis').createClient();

const { sequelize, keySecret, DataTypes } = require('./config');

const route = require('./routers');

var app = express();

app.use(express.urlencoded({ extended: true }));
app.use(session({
    store: new RedisStore({ client: redisClient }),
    secret: keySecret,
    resave: false,
    saveUninitialized: false
}));
app.use(flash());

app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

route(app);

app.use(function(req, res, next) {
    res.status(404);

    // Dùng html thì bỏ phần này và ẩn redirect
    // if (req.accepts('html')) {
    //     res.sendFile(path.join(__dirname, 'views', '404.html'));
    //     return;
    // }

    return res.redirect("/");
});


sequelize.sync();
var server = app.listen(app.get('port'), function () {
    debug('Express server listening on port ' + server.address().port);
});
