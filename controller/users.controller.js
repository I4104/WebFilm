const userModel = require("../models/users.model");
const bcrypt = require('bcrypt');

class AuthController {

    profile(req, res) {
        const user = res.locals.user;
        return res.render("auth/profile");
    }

    login(req, res) {
        return res.render("auth/login");
    }

    register(req, res) {
        return res.render("auth/register");
    }

    logout(req, res) {
        req.session.user = null;
        return res.redirect("/users/login");
    }

    async create(req, res) {
        try {
            const { username, email, password } = req.body;

            const existingEmail = await userModel.findOne({ where: { email } });
            if (existingEmail) {
                return res.status(400).json({
                    error: 3,
                    message: 'Email already in use'
                });
            }

            const existingUser = await userModel.findOne({ where: { username } });
            if (existingUser) {
                return res.status(400).json({
                    error: 2,
                    message: 'Username already in use'
                });
            }

            const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

            if (!passwordRegex.test(password)) {
                return res.status(400).json({
                    error: 1,
                    message: 'Password is not in the correct format'
                });
            }

            const salt = await bcrypt.genSalt(10);
            const hashedPassword = await bcrypt.hash(password, salt);

            const user = await userModel.create({ username, email, password: hashedPassword, rank: "default" });

            req.session.user = {
                userId: user.id,
                login_at: Date.now()
            }
            return res.status(200).json({
                error: 0,
                message: 'Register successfully'
            });
        } catch (error) {
            return res.status(400).json({
                error: -1,
                message: 'An error occurred during processing',
                track: error
            });
        }
    }

    async auth(req, res) {
        try {
            const { username, password } = req.body;

            const user = await userModel.findOne({ where: { username } });
            if (!user) {
                return res.status(400).json({
                    error: 3,
                    message: "Username doesn't exits!"
                });
            }

            const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

            if (!passwordRegex.test(password)) {
                return res.status(400).json({
                    error: 1,
                    message: 'Password is not in the correct format'
                });
            }

            const isMatch = await bcrypt.compare(password, user.password);
            if (!isMatch) {
                return res.status(400).json({
                    error: 2,
                    message: 'Incorrect password'
                });
            }

            req.session.user = {
                userId: user.id,
                login_at: Date.now()
            }
            return res.status(200).json({
                error: 0,
                message: 'Login successfully'
            });
        } catch (error) {
            return res.status(400).json({
                error: -1,
                message: 'An error occurred during processing',
                track: error
            });
        }
    }
}

module.exports = new AuthController;


