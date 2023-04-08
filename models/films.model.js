const { sequelize, keySecret, DataTypes } = require('../config');

const film = sequelize.define('films', {
    id: {
        type: DataTypes.INTEGER,
        primaryKey: true,
        autoIncrement: true
    },
    title: {
        type: DataTypes.STRING,
        allowNull: false
    },
    type: {
        type: DataTypes.STRING,
        allowNull: false
    },
    status: {
        type: DataTypes.STRING,
        allowNull: false
    },
    origin_name: {
        type: DataTypes.STRING,
        allowNull: false
    },
    episode_current: {
        type: DataTypes.STRING,
        allowNull: true
    },
    episode_total: {
        type: DataTypes.STRING,
        allowNull: true
    },
    description: {
        type: DataTypes.TEXT,
        allowNull: false
    },
    slug: {
        type: DataTypes.TEXT,
        allowNull: false
    },
    thumb_url: {
        type: DataTypes.TEXT,
        allowNull: false
    },
    poster_url: {
        type: DataTypes.TEXT,
        allowNull: false
    },
    tags: {
        type: DataTypes.TEXT,
        allowNull: true
    },
    likes: {
        type: DataTypes.TEXT,
        allowNull: true
    },
    year_date: {
        type: DataTypes.INTEGER,
        allowNull: false
    },
    modified: {
        type: DataTypes.STRING,
        allowNull: false
    },
    film_time: {
        type: DataTypes.STRING,
        allowNull: true
    },
    m3u8: {
        type: DataTypes.TEXT('long'),
        allowNull: true
    },
    seen: {
        type: DataTypes.INTEGER,
        allowNull: true
    },
}, {
    timestamps: false
});

module.exports = film;