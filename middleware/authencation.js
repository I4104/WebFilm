const userModel = require("../models/users.model");

class AuthMiddleware {
    notAuth(req, res, next) {
        if (!req.session.user) {
            next();
        } else {
            return res.redirect("/");
        }
    }

    isAuth(req, res, next) {
        if (!req.session.user) {
            return res.redirect("/users/logout");
        } else {
            next();
        }
    }

    async getAuth(req, res, next) {
        if (!req.session.user) {
            res.locals.user = null;
            next();
        } else {
            const user = await userModel.findOne({
                where: { id: req.session.user.userId },
            });
            if (!user) {
                return res.locals.user = null;
            }
            res.locals.user = user;
            next();
        }
    }
}

module.exports = new AuthMiddleware();