<?php

namespace BookstroreApp\Models;

class Book {
    private $books;

    public function __construct() {
        $this->books = json_decode(file_get_contents(__DIR__ . '/../Data/books.json'), true);
    }

    public function getAllBooks() {
        return $this->books;
    }

    public function getBookById($id) {
        foreach ($this->books as $book) {
            if ($book['id'] == $id) {
                return $book;
            }
        }
        return null;
    }
}