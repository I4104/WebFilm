const { sequelize, keySecret, DataTypes, Op } = require('../config');

const Logs = sequelize.define('logs', {
    id: {
        type: DataTypes.INTEGER,
        primaryKey: true,
        autoIncrement: true
    },
    content: {
        type: DataTypes.STRING,
        allowNull: false
    },
    date: {
        type: DataTypes.TEXT,
        allowNull: false
    },
}, {
    timestamps: false
});

module.exports = Logs;
