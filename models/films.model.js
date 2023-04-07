const { sequelize, keySecret, DataTypes } = require('../config');

const User = sequelize.define('film', {
    id: {
        type: DataTypes.INTEGER,
        primaryKey: true,
        autoIncrement: true
    },
    title: {
        type: DataTypes.STRING,
        allowNull: false
    },
    description: {
        type: DataTypes.STRING,
        allowNull: false
    },
    tags: {
        type: DataTypes.STRING,
        allowNull: false
    },
    likes: {
        type: DataTypes.STRING,
        allowNull: false
    },
    year_date: {
        type: DataTypes.INTEGER,
        allowNull: false
    },
    film_time: {
        type: DataTypes.STRING,
        allowNull: false
    },
    m3u8: {
        type: DataTypes.STRING,
        allowNull: false
    },
}, {
    timestamps: false
});

module.exports = User;