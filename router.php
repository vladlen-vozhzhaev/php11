<?php
session_start();
$path = explode("/", $_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];
$mysqli = new mysqli("localhost", "root", "", "php11");
require_once("classes/User.php");
$content = null;
if ($path[1] == "login" and $method=='GET') {
    $content = file_get_contents("login.html");
} elseif ($path[1] == "login" and $method == "POST") {
    $content = User::login();
} elseif ($path[1] == "register" and $method=='GET') {
    $content = file_get_contents("registration.html");
} elseif ($path[1] == "register" and $method == "POST"){
  $content = User::register();
} elseif ($path[1] == "addArticle") {
    $content = file_get_contents("addArticle.html");
} else {
    $content = "Страница не найдена";
}
require_once('template.php');