<script>
    $("#kn_create_category").on("submit", (e) => {
        e.preventDefault();
        $("#kn_create_category_submit").attr("disabled", true);
        $("#kn_create_category_submit").html('<span class="indicator-label">Đang Tạo...</span>');
        $.ajax({
            url: "<?php echo $domain."post/"; ?>",
            type: "POST",
            data: {
                handler: "<?php
                    $data["uri"] = $domain."admin/handler/execute/category.php?action=create";
                    $data["method"] = "POST";
                    $data["hasLogin"] = true;
                    $data["username"] = $_SESSION["username"];
                    $data["action"] = "create";
                    echo $ICrypt->createToken(json_encode($data));
                ?>",
                name: $("#kn_create_category").find('input[name="name"]').val(),
                slug: $("#kn_create_category").find('input[name="slug"]').val(),
                status: $("#kn_create_category").find('input[name="status"]').val(),
            },
            success: (data) => {
                $("#kn_create_category_submit").attr("disabled", false);
                $("#kn_create_category_submit").html('<span class="indicator-label">Tạo Danh Mục</span>');
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

    $("#kn_change_category").on("submit", (e) => {
        e.preventDefault();
        $("#kn_change_category_submit").attr("disabled", true);
        $("#kn_change_category_submit").html('<span class="indicator-label">Đang Thay Đổi...</span>');
        $.ajax({
            url: "<?php echo $domain."post/"; ?>",
            type: "POST",
            data: {
                handler: "<?php
                    $data["uri"] = $domain."admin/handler/execute/category.php?action=change";
                    $data["method"] = "POST";
                    $data["hasLogin"] = true;
                    $data["username"] = $_SESSION["username"];
                    $data["action"] = "change";
                    echo $ICrypt->createToken(json_encode($data));
                ?>",
                id: $("#kn_change_category").find('input[name="id"]').val(),
                name: $("#kn_change_category").find('input[name="name"]').val(),
                slug: $("#kn_change_category").find('input[name="slug"]').val(),
                status: $("#kn_change_category").find('input[name="status"]').val(),
            },
            success: (data) => {
                $("#kn_change_category_submit").attr("disabled", false);
                $("#kn_change_category_submit").html('<span class="indicator-label">Cập Nhật</span>');
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
    
    $('#kn_modal_change_category').on("show.bs.modal", function (e) {
        $("#id").attr("value", $(e.relatedTarget).data('id'));
        $("#name").attr("value", $(e.relatedTarget).data('name'));
        $("#slug").attr("value", $(e.relatedTarget).data('slug'));
        if ($(e.relatedTarget).data('status') == "on") {
            $("#status").prop("checked", true);
        } else {
            $("#status").prop("checked", false);
        }
        
    });

    function del_category(id) {
        $.ajax({
            url: "<?php echo $domain."get/"; ?>",
            type: "POST",
            data: {
                handler: "<?php
                    $data["uri"] = $domain."admin/handler/execute/category.php?action=delete";
                    $data["method"] = "POST";
                    $data["hasLogin"] = true;
                    $data["username"] = $_SESSION["username"];
                    $data["action"] = "delete";
                    echo $ICrypt->createToken(json_encode($data));
                ?>",
                id: id,
            },
            success: (data) => {
                console.log(data)
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
    }
</script>