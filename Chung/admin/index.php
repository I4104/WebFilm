<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/handler/config.php');
if (!isset($_SESSION["username"])) {
    header("location: /404");
    exit;
}
if ($users["rank"] != "Admin") {
    header("location: /404");
    exit;
}
$router = isset($get_["router"]) ? $get_["router"] : "home";
switch ($router) {
	case 'home':
	    include 'views/layouts/header.php';
		include 'views/home.php';
		include 'views/layouts/footer.php';
		break;
	
	/* Product */
	case 'products-create':
	    include 'views/layouts/header.php';
		include 'views/products/create.php';
		include 'views/layouts/footer.php';
		break;
	case 'products-list':
	    include 'views/layouts/header.php';
		include 'views/products/list.php';
		include 'views/layouts/footer.php';
		break;
		
	/* Manage */
	case 'manage-category':
	    include 'views/layouts/header.php';
		include 'views/manage/category.php';
		include 'views/layouts/footer.php';
		include 'views/statics/category.php';
		break;
	case 'manage-type':
	    include 'views/layouts/header.php';
		include 'views/manage/type.php';
		include 'views/layouts/footer.php';
		break;
	case 'manage-users':
	    include 'views/layouts/header.php';
		include 'views/manage/users.php';
		include 'views/layouts/footer.php';
		break;
	case 'manage-users-edit':
	    include 'views/layouts/header.php';
		include 'views/manage/users-edit.php';
		include 'views/layouts/footer.php';
		break;
	
	default:
	    include 'views/layouts/header.php';
	    include 'views/404.php';
	    include 'views/layouts/footer.php';
	break;
}
?>