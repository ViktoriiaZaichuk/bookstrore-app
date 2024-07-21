<?php

namespace BookstroreApp\Controllers;

use BookstroreApp\Models\Book;

class BooksController extends BaseController {
    private $bookModel;

    public function __construct() {
        parent::__construct();
        $this->bookModel = new Book();
    }

    public function index() {
        $books = $this->bookModel->getAllBooks();
        echo $this->twig->render('books/index.html.twig', ['books' => $books]);
    }

    public function show($id) {
        $book = $this->bookModel->getBookById($id);
        if ($book) {
            echo $this->twig->render('books/show.html.twig', ['book' => $book]);
        } else {
            http_response_code(404);
            echo 'Book not found';
        }
    }
}