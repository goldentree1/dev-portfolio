<?php
$uri = $_SERVER["REQUEST_URI"] ?? "/"; // fallback if not set

$page_title =
    $uri == "/" ? "PHP Router HOME!!!" : ucFirst(substr($uri, 1)) . " Page!";

$routes = [
    "/" => "views/index.router.view.php",
    "/contact" => "views/contact.router.view.php",
];

if (isset($routes["$uri"])) {
    require $routes["$uri"];
} else {
    http_response_code(404);
    require "views/404.router.view.php";
    die();
}
