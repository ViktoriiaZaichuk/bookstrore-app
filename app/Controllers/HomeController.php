<?php

namespace BookstroreApp\Controllers;

class HomeController extends BaseController {
    public function index() {
        echo $this->twig->render('home/index.html.twig');
    }
}