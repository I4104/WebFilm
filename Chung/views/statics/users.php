<script>
    <?php if (isset($_SESSION["username"])) { ?>
    $("#kt_account_profile_settings").find('select[name="country"]').val("<?php echo $users["country"]; ?>");
    $("#kt_account_profile_settings").on("submit", (e) => {
        e.preventDefault();
        $("#kt_account_profile_details_submit").attr("disabled", true);
        $("#kt_account_profile_details_submit").html('<span class="indicator-label">Đang xử lý...</span>');
        $.ajax({
            url: "<?php echo $domain."post/"; ?>",
            type: "POST",
            data: {
                handler: "<?php
                    $data["uri"] = $domain."handler/execute/users.php?action=change";
                    $data["method"] = "POST";
                    $data["hasLogin"] = true;
                    $data["username"] = $_SESSION["username"];
                    $data["action"] = "change";
                    echo $ICrypt->createToken(json_encode($data));
                ?>",
                avatar: $("#avata64").css('background-image').replace('url(','').replace(')','').replace(/\"/gi, ""),
                realname: $("#kt_account_profile_settings").find('input[name="realname"]').val(),
                phone: $("#kt_account_profile_settings").find('input[name="phone"]').val(),
                country: $("#kt_account_profile_settings").find('select[name="country"] option:selected').val(),
                phone: $("#kt_account_profile_settings").find('input[name="phone"]').val(),
            },
            success: (data) => {
                $("#kt_account_profile_details_submit").attr("disabled", false);
                $("#kt_account_profile_details_submit").html('<span class="indicator-label">Cập Nhật</span>');
                var data = JSON.parse(data);
                Swal.fire({
                    text: data.message,
                    icon: data.type,
                    buttonsStyling: true,
                    confirmButtonText: data.buttontext,
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then((result) => {
                    if (data.reload) {
                        window.location.reload();
                    }
                }); 
            }
        });
    });
    
    $("#knsea_signin_change_email").on("submit", (e) => {
        e.preventDefault();
        $("#kt_signin_submit").attr("disabled", true);
        $("#kt_signin_submit").html('<span class="indicator-label">Đang thay đổi...</span>');
        $.ajax({
            url: "<?php echo $domain."post/"; ?>",
            type: "POST",
            data: {
                handler: "<?php
                    $data["uri"] = $domain."handler/execute/users.php?action=change_email";
                    $data["method"] = "POST";
                    $data["hasLogin"] = true;
                    $data["username"] = $_SESSION["username"];
                    $data["action"] = "change_email";
                    echo $ICrypt->createToken(json_encode($data));
                ?>",
                email: $("#knsea_signin_change_email").find('input[name="email"]').val(),
                password: $("#knsea_signin_change_email").find('input[name="password"]').val(),
            },
            success: (data) => {
                $("#kt_signin_submit").attr("disabled", false);
                $("#kt_signin_submit").html('<span class="indicator-label">Cập Nhật Email</span>');
                var data = JSON.parse(data);
                Swal.fire({
                    text: data.message,
                    icon: data.type,
                    buttonsStyling: true,
                    confirmButtonText: data.buttontext,
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then((result) => {
                    if (data.reload) {
                        window.location.reload();
                    }
                }); 
            }
        });
    });
    
    $("#knsea_signin_change_password").on("submit", (e) => {
        e.preventDefault();
        $("#kt_password_submit").attr("disabled", true);
        $("#kt_password_submit").html('<span class="indicator-label">Đang thay đổi...</span>');
        $.ajax({
            url: "<?php echo $domain."post/"; ?>",
            type: "POST",
            data: {
                handler: "<?php
                    $data["uri"] = $domain."handler/execute/users.php?action=change_password";
                    $data["method"] = "POST";
                    $data["hasLogin"] = true;
                    $data["username"] = $_SESSION["username"];
                    $data["action"] = "change_password";
                    echo $ICrypt->createToken(json_encode($data));
                ?>",
                'old': $("#knsea_signin_change_password").find('input[name="old"]').val(),
                'new': $("#knsea_signin_change_password").find('input[name="new"]').val(),
                'renew': $("#knsea_signin_change_password").find('input[name="renew"]').val(),
            },
            success: (data) => {
                $("#kt_password_submit").attr("disabled", false);
                $("#kt_password_submit").html('<span class="indicator-label">Cập Nhật Mật Khẩu</span>');
                var data = JSON.parse(data);
                Swal.fire({
                    text: data.message,
                    icon: data.type,
                    buttonsStyling: true,
                    confirmButtonText: data.buttontext,
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then((result) => {
                    if (data.reload) {
                        window.location.reload();
                    }
                }); 
            }
        });
    });
    <?php } else { ?>
    $("#kt_sign_in_form").on("submit", (e) => {
        e.preventDefault();
        $("#kt_sign_in_submit").attr("disabled", true);
        $("#kt_sign_in_submit").html('<span class="indicator-label">Đang đăng nhập...</span>');
        $.ajax({
            url: "<?php echo $domain."post/"; ?>",
            type: "POST",
            data: {
                handler: "<?php
                    $data["uri"] = $domain."handler/execute/users.php?action=login";
                    $data["method"] = "POST";
                    $data["hasLogin"] = false;
                    $data["action"] = "login";
                    echo $ICrypt->createToken(json_encode($data));
                ?>",
                username: $("#kt_sign_in_form").find('input[name="username"]').val(),
                password: $("#kt_sign_in_form").find('input[name="password"]').val(),
            },
            success: (data) => {
                $("#kt_sign_in_submit").attr("disabled", false);
                $("#kt_sign_in_submit").html('<span class="indicator-label">Đăng Nhập</span>');
                var data = JSON.parse(data);
                Swal.fire({
                    text: data.message,
                    icon: data.type,
                    buttonsStyling: true,
                    confirmButtonText: data.buttontext,
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then((result) => {
                    if (data.reload) {
                        window.location.reload();
                    }
                }); 
            }
        });
    });
    
    $("#kt_sign_up_form").on("submit", (e) => {
        e.preventDefault();
        if (!$("#pc_4").hasClass("active")) {
            $("#val_mess").text("Mật khẩu phải chứa ít nhất 8 ký tự gồm ít nhất 1 ký tự in hoa, 1 chữ số và 1 ký tự in thường");
            return;
        }
        $("#kt_sign_up_submit").attr("disabled", true);
        $("#kt_sign_up_submit").html('<span class="indicator-label">Đang đăng ký...</span>');
        $.ajax({
            url: "<?php echo $domain."post/"; ?>",
            type: "POST",
            data: {
                handler: "<?php
                    $data["uri"] = $domain."handler/execute/users.php?action=register";
                    $data["method"] = "POST";
                    $data["hasLogin"] = false;
                    $data["action"] = "register";
                    echo $ICrypt->createToken(json_encode($data));
                ?>",
                username: $("#kt_sign_up_form").find('input[name="username"]').val(),
                password: $("#kt_sign_up_form").find('input[name="password"]').val(),
                repassword: $("#kt_sign_up_form").find('input[name="confirm-password"]').val(),
                realname: $("#kt_sign_up_form").find('input[name="realname"]').val(),
                email: $("#kt_sign_up_form").find('input[name="email"]').val(),
            },
            success: (data) => {
                $("#kt_sign_up_submit").attr("disabled", false);
                $("#kt_sign_up_submit").html('<span class="indicator-label">Đăng Ký</span>');
                var data = JSON.parse(data);
                Swal.fire({
                    text: data.message,
                    icon: data.type,
                    buttonsStyling: true,
                    confirmButtonText: data.buttontext,
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                }).then((result) => {
                    if (data.reload) {
                        window.location.reload();
                    }
                }); 
            }
        });
    });
    <?php } ?>
</script>