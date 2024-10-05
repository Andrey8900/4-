<?php

require_once 'Book.php';

class DigitalBook extends Book {
    private $downloadLink;

    public function __construct($title, $author, $downloadLink) {
        parent::__construct($title, $author);
        $this->downloadLink = $downloadLink;
    }

    public function getAccess() {
        $this->incrementReadCount();
        return "Ссылка для скачивания: " . $this->downloadLink;
    }
}
