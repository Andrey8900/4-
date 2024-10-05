class Book {
    protected $title;
    protected $author;
    protected $isbn;
    protected $totalPages;
    protected $readCount = 0;

    public function __construct($title, $author, $isbn, $totalPages) {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->totalPages = $totalPages;
    }

    public function read() {
        $this->readCount++;
        return "You have read {$this->title}.";
    }

    public function getInfo() {
        return "{$this->title} by {$this->author}, ISBN: {$this->isbn}";
    }
}
