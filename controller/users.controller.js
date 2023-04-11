const userModel = require("../models/users.model");
const filmModel = require("../models/films.model");
const { Op } = require('../config');
const bcrypt = require('bcrypt');

class AuthController {

    async profile(req, res) {
        const user = res.locals.user;

        try {
            const bookmark = await filmModel.findAll({
                where: { 
                    m3u8: {
                        [Op.not]: "[]",
                    },
                    likes: {
                        [Op.or]: [
                            { [Op.like]: '['+ user.id +']%' },
                            { [Op.like]: '['+ user.id +',%' },
                            { [Op.like]: '%,'+ user.id +',%' },
                            { [Op.like]: '%,'+ user.id +']' }
                        ]
                    }
                },
                order: [['id', 'DESC']],
            });
            res.locals.bookmark = bookmark;
        } catch (error) {
            res.locals.bookmark = null;
        }

        res.locals.router = "profile";
        res.locals.title = "Thông tin cá nhân";
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
                return res.json({
                    error: 3,
                    type: "error", 
                    buttontext: "Ok", 
                    reload: false,
                    message: 'Email đã được sử dụng'
                });
            }

            const existingUser = await userModel.findOne({ where: { username } });
            if (existingUser) {
                return res.json({
                    error: 2,
                    type: "error", 
                    buttontext: "Ok", 
                    reload: false,
                    message: 'Username đã được sử dụng'
                });
            }

            const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

            if (!passwordRegex.test(password)) {
                return res.json({
                    error: 1,
                    type: "error", 
                    buttontext: "Ok", 
                    reload: false,
                    message: 'Mật khẩu phải bao gồm chữ hoa, chữ thường và số'
                });
            }

            const salt = await bcrypt.genSalt(10);
            const hashedPassword = await bcrypt.hash(password, salt);

            const user = await userModel.create({ username, email, password: hashedPassword, rank: "default", active: 0 });

            return res.json({
                error: 0,
                type: "success", 
                buttontext: "Ok", 
                reload: true,
                message: 'Đăng ký thành công, vui lòng báo admin để active tài khoản!'
            });
        } catch (error) {
            return res.json({
                error: -1,
                type: "error", 
                buttontext: "Ok", 
                reload: false,
                message: 'An error occurred during processing',
            });
        }
    }

    async auth(req, res) {
        try {
            const { username, password } = req.body;

            const user = await userModel.findOne({ where: { username } });
            if (!user) {
                return res.json({
                    error: 3,
                    type: "error", 
                    buttontext: "Ok", 
                    reload: false,
                    message: "Tài khoản không tồn tại"
                });
            }

            if (user.active == 0) {
                return res.json({
                    error: 4,
                    type: "error", 
                    buttontext: "Ok", 
                    reload: true,
                    message: 'Vui lòng báo admin để active tài khoản!'
                });
            }

            const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;

            if (!passwordRegex.test(password)) {
                return res.json({
                    error: 1,
                    type: "error", 
                    buttontext: "Ok", 
                    reload: false,
                    message: 'Mật khẩu không đúng định dạng'
                });
            }

            const isMatch = await bcrypt.compare(password, user.password);
            if (!isMatch) {
                return res.json({
                    error: 2,
                    type: "error", 
                    buttontext: "Ok", 
                    reload: false,
                    message: 'Mật khẩu không chính xác'
                });
            }

            req.session.user = {
                userId: user.id,
                login_at: Date.now()
            }
            return res.json({
                error: 0,
                type: "success", 
                buttontext: "Ok", 
                reload: true,
                message: 'Đăng nhập thành công'
            });
        } catch (error) {
            return res.json({
                error: -1,
                type: "error", 
                buttontext: "Ok", 
                reload: false,
                message: 'An error occurred during processing',
            });
        }
    }
}

module.exports = new AuthController;


