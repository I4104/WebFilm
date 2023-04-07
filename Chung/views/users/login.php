<!DOCTYPE html>
<html lang="vi">
<head>
    <title>Đăng Nhập Tài Khoản</title>
    <meta charset="utf-8" />
    <meta name="description" content="Tham Gia Hệ Thống Phim Miễn Phí" />
    <meta name="keywords" content="tv, phim, hệ thống phim, phim tốc độ cao" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:type" content="<?php echo $settings->get("og:type"); ?>" />
    <meta property="og:title" content="<?php echo $settings->get("og:title"); ?>" />
    <meta property="og:url" content="<?php echo $settings->get("og:url"); ?>" />
    <meta property="og:site_name" content="<?php echo $settings->get("og:site_name"); ?>" />
    <link rel="shortcut icon" href="<?php echo $domain;?>assets/media/logos/favicon.ico?sea=<?php echo time() ;?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<link href="<?php echo $domain;?>assets/plugins/custom/vis-timeline/vis-timeline.bundle.css?sea=<?php echo time() ;?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $domain;?>assets/plugins/custom/datatables/datatables.bundle.css?sea=<?php echo time() ;?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $domain;?>assets/plugins/global/plugins.bundle.css?sea=<?php echo time() ;?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $domain;?>assets/css/style.bundle.css?sea=<?php echo time() ;?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $domain;?>assets/css/style.knsea.css?sea=<?php echo time() ;?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo $domain;?>assets/css/style.scrollbar.css?sea=<?php echo time() ;?>" rel="stylesheet" type="text/css" />
</head>
<body id="kt_body" class="auth-bg">
    <script>
        var defaultThemeMode = "dark";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-theme-mode");
            } else {
                if (localStorage.getItem("data-theme") !== null) {
                    themeMode = localStorage.getItem("data-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-theme", "dark");
        }
    </script>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <a href="<?php echo $domain;?>" class="d-block d-lg-none mx-auto py-20">
                <img alt="Logo" src="<?php echo $domain;?>assets/media/logos/default.svg" class="theme-light-show h-25px"/>
                <img alt="Logo" src="<?php echo $domain;?>assets/media/logos/default-dark.svg" class="theme-dark-show h-25px"/>
            </a>    
            <div class="d-flex flex-column flex-column-fluid flex-center w-lg-50 p-10">         
                <div class="d-flex justify-content-between flex-column-fluid flex-column w-100 mw-450px">
                    <div class="d-flex flex-stack py-2">
                        <div class="me-2">
                            <a href="<?php echo $domain;?>register" class="btn btn-icon bg-light rounded-circle">
                                <span class="svg-icon svg-icon-muted svg-icon-2hx fs-2 text-gray-800">
                                   <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor"/>
                                        <path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor"/>
                                    </svg>
                                </span>
                            </a>   
                        </div>
                    </div>
                    <div class="py-20">
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form">
                            <div class="text-start mb-10">
                                <h1 class="text-dark mb-3 fs-2x" data-kt-translate="sign-up-title">Đăng Nhập</h1>
                                <div class="text-gray-400 fw-semibold fs-6" data-kt-translate="general-desc">Đăng nhập vô nhanh đi !!!</div>
                            </div>    
                            <div class="row fv-row mb-7">
                                <div class="col-xl-12">              
                                    <input class="form-control form-control-lg form-control-solid" type="text" placeholder="Tài Khoản" name="username"/>
                                </div>
                            </div>
                            <div class="row fv-row mb-7">
                                <div class="col-xl-12">              
                                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder="Mật Khẩu" name="password"/>
                                </div>
                            </div>
                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-10">
                            <div></div>
                            <a href="<?php echo $domain ;?>forgot-password" class="link-primary">Quên Mật Khẩu ?</a>
                        </div>
                            <div class="d-flex flex-stack">
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary"><span class="indicator-label">Đăng Nhập</span></button>
                                <div class="d-flex align-items-center">
                                    <div class="m-0">
                                        <span class="text-gray-400 fw-bold fs-5 me-2" data-kt-translate="sign-up-head-desc">Đã chưa tài khoản ?</span>
                                        <a href="<?php echo $domain;?>register" class="link-primary fw-bold fs-5" data-kt-translate="sign-up-head-link">Đăng Ký Ngay</a>       
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>         
                    <div class="m-0"></div>
                </div>
            </div>
            <div class="d-none d-lg-flex flex-lg-row-fluid w-50 bgi-size-cover bgi-position-y-center bgi-position-x-start bgi-no-repeat" 
                style="background-image: url(<?php echo $domain;?>assets/media/auth/bg11.png)">  
            </div>
        </div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="<?php echo $domain;?>assets/plugins/global/plugins.bundle.js?sea=<?=time();?>"></script>
	<script src="<?php echo $domain;?>assets/js/scripts.bundle.js?sea=<?=time();?>"></script>
	<script src="<?php echo $domain;?>assets/js/widgets.bundle.js?sea=<?=time();?>"></script>
	<script src="<?php echo $domain;?>assets/js/custom/widgets.js?sea=<?=time();?>"></script>
</body>
</html>