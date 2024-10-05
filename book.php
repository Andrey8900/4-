<?php

abstract class Book {
    protected $title;
    protected $author;
    protected $readCount = 0;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    abstract public function getAccess();

    public function incrementReadCount() {
        $this->readCount++;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }
}
