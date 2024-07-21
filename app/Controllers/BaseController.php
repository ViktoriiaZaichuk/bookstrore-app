<?php

namespace BookstroreApp\Controllers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class BaseController {
    protected $twig;

    public function __construct() {
        $loader = new FilesystemLoader(__DIR__ . '/../Views');
        $this->twig = new Environment($loader);
    }
}