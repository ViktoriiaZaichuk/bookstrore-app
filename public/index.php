<?php


require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


require __DIR__ . '/../config/database.php';
require __DIR__ . '/../app/Routes/routes.php';
