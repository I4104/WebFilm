const { Sequelize, DataTypes, Op } = require('sequelize');

const sequelize = new Sequelize('admin', 'root', '', {
    host: 'localhost',
    dialect: 'mysql',
    logging: false,
    dialectOptions: {
        timezone: '+07:00', // Thay đổi thành giờ địa phương của bạn
    },
});

const keySecret = "I4104@KnSea";

module.exports = { sequelize, keySecret, DataTypes, Op };