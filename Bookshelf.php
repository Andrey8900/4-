<?php

class Bookshelf {
    private $identifier;
    private $books = [];

    public function __construct($identifier) {
        $this->identifier = $identifier;
    }

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function listBooks() {
        $bookList = [];
        foreach ($this->books as $book) {
            $bookList[] = $book->getTitle() . " by " . $book->getAuthor();
        }
        return $bookList;
    }

    public function getIdentifier() {
        return $this->identifier;
    }
}
