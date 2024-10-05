<?php

require_once 'Bookshelf.php';

class Room {
    private $name;
    private $bookshelves = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addBookshelf(Bookshelf $bookshelf) {
        $this->bookshelves[] = $bookshelf;
    }

    public function listBookshelves() {
        $shelfList = [];
        foreach ($this->bookshelves as $shelf) {
            $shelfList[] = $shelf->getIdentifier();
        }
        return $shelfList;
    }
}
