<?php
require_once "config/db.php";

require_once "views/layout/header.php";
include("core/functions.php");
include("core/validation.php");
showMessage();
$page=isset($_GET['page'])?$_GET['page']:"home";
switch($page){
    case "home":
        include("views/home.php");
        break;
    case "about":
        include("views/about.php");
        break;
    case "contact":
        include("views/contact.php");
        break;
    case "post":
        include("views/post.php");
        break;
    case "register":
        include("views/auth/register.php");
        break;
    case "sign-in":
        include("controllers/auth/RegisterController.php");
        break;
    case "login":
        include("views/auth/login.php");
        break;
    case "auth-login":
        include("controllers/auth/LoginController.php");
        break;
    default :
    include("views/404.php");
    
}































require_once "views/layout/footer.php";
?>