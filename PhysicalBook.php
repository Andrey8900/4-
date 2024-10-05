<?php

require_once 'Book.php';

class PhysicalBook extends Book {
    private $libraryAddress;

    public function __construct($title, $author, $libraryAddress) {
        parent::__construct($title, $author);
        $this->libraryAddress = $libraryAddress;
    }

    public function getAccess() {
        $this->incrementReadCount();
        return "Адрес библиотеки: " . $this->libraryAddress;
    }
}
