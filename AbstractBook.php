abstract class AbstractBook {
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

    abstract public function getOnHand();

    public function read() {
        $this->readCount++;
        return "You have read {$this->title}.";
    }

    public function getInfo() {
        return "{$this->title} by {$this->author}, ISBN: {$this->isbn}, Read Count: {$this->readCount}";
    }
}

class DigitalBook extends AbstractBook {
    private $downloadLink;

    public function __construct($title, $author, $isbn, $totalPages, $downloadLink) {
        parent::__construct($title, $author, $isbn, $totalPages);
        $this->downloadLink = $downloadLink;
    }

    public function getOnHand() {
        return "Download {$this->title} from {$this->downloadLink}.";
    }
}

class PhysicalBook extends AbstractBook {
    private $libraryAddress;

    public function __construct($title, $author, $isbn, $totalPages, $libraryAddress) {
        parent::__construct($title, $author, $isbn, $totalPages);
        $this->libraryAddress = $libraryAddress;
    }

    public function getOnHand() {
        return "Pick up {$this->title} at {$this->libraryAddress}.";
    }
}
