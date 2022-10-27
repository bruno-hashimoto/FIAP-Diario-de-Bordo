<?php 

$url = pegarUrl();
$url = explode('/', $url);

switch ($url[0]) {
    case '':
        $controller = "./controllers/homeController.php";
        $page = "./view/home.php";
        break;

    case 'sobre':
        $controller = "./controllers/aboutController.php";
        $page = "./view/sobre.php";
        break;

    case 'post-ver':
        $controller = "./controllers/postController.php";
        $page = "./view/post-ver.php";
        break;

    default:
        $page = "./view/404.php";
    break;
}