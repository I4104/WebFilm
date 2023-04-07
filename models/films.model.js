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
        allowNull: true
    },
    status: {
        type: DataTypes.STRING,
        allowNull: true
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
        type: DataTypes.STRING,
        allowNull: false
    },
    slug: {
        type: DataTypes.STRING,
        allowNull: false
    },
    thumb_url: {
        type: DataTypes.STRING,
        allowNull: false
    },
    poster_url: {
        type: DataTypes.STRING,
        allowNull: false
    },
    tags: {
        type: DataTypes.STRING,
        allowNull: true
    },
    likes: {
        type: DataTypes.STRING,
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
        type: DataTypes.STRING,
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