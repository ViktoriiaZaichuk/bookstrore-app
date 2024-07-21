<?php

use BookstroreApp\Controllers\HomeController;
use BookstroreApp\Controllers\BooksController;

require __DIR__ . '/../../vendor/autoload.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        (new HomeController())->index();
        break;
    case '/books':
        (new BooksController())->index();
        break;
    case (preg_match('/\/books\/(\d+)/', $uri, $matches) ? true : false):
        (new BooksController())->show($matches[1]);
        break;
    default:
        http_response_code(404);
        echo 'Page not found';
        break;
}