'use strict';

const home = require("./index.routers");
const auth = require("./users.routers");

function route(app) {
    app.use('/users', auth);
    app.use('/', home);
};

module.exports = route;