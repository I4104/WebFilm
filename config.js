const { Sequelize, DataTypes, Op } = require('sequelize');

const sequelize = new Sequelize('knseacom_film', 'knseacom_film', 'I4104@sea', {
    host: 'localhost',
    dialect: 'mysql',
    logging: false,
    dialectOptions: {
        timezone: '+07:00', // Thay đổi thành giờ địa phương của bạn
    },
});

const keySecret = "I4104@KnSea";

module.exports = { sequelize, keySecret, DataTypes, Op };