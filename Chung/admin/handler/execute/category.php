<?php
    require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/handler/config.php');
    
    if (isset($post_["handler"])) {
	    $post_ = $IHandler->method($_POST);
    } else {
        $post_ = [];
    }
    
	$action = isset($get_["action"]) ? $get_["action"]  : "";
    
    if ($action == "create") {
        $name = isset($post_["name"]) ? $post_["name"] : "";
        $slug = isset($post_["slug"]) ? $post_["slug"] : "";
        $status = isset($post_["status"]) ? $post_["status"] : "";
        
        if ($name == "" || $slug == "") {
            echo swal("Vui lòng nhập đủ thông tin!!!", "error", "Nhập lại", false);
            return;
        }
        
        // Check ký tự
        $check_name = $IHandler->str_format(str_replace(" ", "", $name));
        if (!$IHandler->check($check_name)) {
            echo swal("Tên danh mục của bạn chứa kí tự không cho phép!", "error", "Hiểu rồi", false);
            return;
        }
        
        $check_name = $IDatabase->is_exists("category", ['name' => $name]); 

        if ($check_name > 0) {
            echo swal("Tên danh mục đã được sử dụng!", "error", "Nhập lại", false); 
        } else {
            $IDatabase->insert("category", ['name' => $name, 'slug' => $slug, 'status' => $status]);
            $data["name"] = $name;
            $data["slug"] = $slug;
            $data["status"] = $status;
            $req = $IRouter->router($data["name"], $data, "POST");
            echo swal("Tạo danh mục thành công!", "success", "OK", true);
        }
    }
    
    if ($action == "change") {
        $id = isset($post_["id"]) ? $post_["id"] : "";
        $name = isset($post_["name"]) ? $post_["name"] : "";
        $slug = isset($post_["slug"]) ? $post_["slug"] : "";
        $status = isset($post_["status"]) ? $post_["status"] : "";
        
        if ($name == "" || $slug == "") {
            echo swal("Vui lòng nhập đủ thông tin!", "error", "Nhập lại", false);
            return;
        }
        
        // Check ký tự
        $check_name = $IHandler->str_format(str_replace(" ", "", $name));
        if (!$IHandler->check($check_name)) {
            echo swal("Tên danh mục của bạn chứa kí tự không cho phép!", "error", "Hiểu rồi", false);
            return;
        }
        
        $check = $IDatabase->is_exists("category", ['name' => $name]);
        
        if ($check_name > 0) {
            echo swal("Tên danh mục đã được sử dụng!", "error", "Nhập lại", false); 
        } else {
            $IDatabase->update("category", ['name' => $name, 'slug' => $slug, 'status' => $status], ["id" => "$id"]);
            echo swal("Cập nhật danh mục thành công!", "success", "OK", true);
        }
        
    }
    
    if ($action == "delete") {
        $id = isset($post_["id"]) ? $post_["id"] : "";
        
        $check_id = $IDatabase->is_exists("category", ['id' => $id]); 

        if (!$check_id > 0) {
            echo swal("Danh mục không tồn tại!", "error", "Thử lại", false); 
        } else {
            $IDatabase->delete("category", ['id' => $id]);
            echo swal("Xóa danh mục thành công! ", "success", "OK", true);
        }
    }
?>