'use strict';

const home = require("./index.routers");
const auth = require("./users.routers");
const ajax = require("./ajax.routers");

function route(app) {
    app.use('/users', auth);
    app.use('/ajax', ajax);
    app.use('/', home);
};

module.exports = route;