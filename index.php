<?php

require_once 'DigitalBook.php';
require_once 'PhysicalBook.php';
require_once 'Bookshelf.php';
require_once 'Room.php';

$digitalBook = new DigitalBook("Digital Transformation", "John Doe", "http://example.com/download");
$physicalBook = new PhysicalBook("The Great Gatsby", "F. Scott Fitzgerald", "123 Library St.");

$shelf = new Bookshelf("Shelf A");
$shelf->addBook($digitalBook);
$shelf->addBook($physicalBook);

$room = new Room("Reading Room");
$room->addBookshelf($shelf);

echo $digitalBook->getAccess() . PHP_EOL;
echo $physicalBook->getAccess() . PHP_EOL;
echo "Books on Shelf A: " . implode(", ", $shelf->listBooks()) . PHP_EOL;
echo "Bookshelves in Reading Room: " . implode(", ", $room->listBookshelves()) . PHP_EOL;
