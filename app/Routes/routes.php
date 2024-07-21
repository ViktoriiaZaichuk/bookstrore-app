<?php

use BookstroreApp\Controllers\HomeController;

require __DIR__ . '/../../vendor/autoload.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
        (new HomeController())->index();
        break;
    default:
        http_response_code(404);
        echo 'Page not found';
        break;
}