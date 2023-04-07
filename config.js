const { Sequelize, DataTypes } = require('sequelize');

const sequelize = new Sequelize('admin', 'root', '', {
    host: 'localhost',
    dialect: 'mysql'
});

const keySecret = "I4104@KnSea";

module.exports = { sequelize, keySecret, DataTypes };