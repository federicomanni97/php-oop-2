<?php
include __DIR__ . '/Product.php';

class Books extends Product
{
    private int $id;
    private string $title;
    private string $image;
    private string $longDescription;
    private string $status; 
    private array $authors;
    private array $category; 
    function __construct($id, $title, $image, $longDescription, $status, $authors, $categories, $price, $quantity)
    {
        parent::__construct($price, $quantity);
        $this->id = $id;
        $this->title = $title;
        $this->image = $image;
        $this->longDescription = $longDescription;
        $this->status = $status;
        $this->authors = $authors;
        $this->category = $categories;
    }
    public function booksCards()
    {
        $poster_path = $this-> image;
        $title = $this-> title;
        $overview = $this->longDescription;
        $vote = $this->formatAuthors();
        $genre = $this->formatCategory();
        $price = $this -> price;
        $quantity = $this -> quantity;
        include __DIR__ . '/../Views/card.php';
    }
    private function formatAuthors()
    {
        $template = "<p>";
        for ($n = 0; $n < count($this->authors); $n++) {
            $template .= $this->authors[$n];
        }
        $template .= "</p>";
        return $template;
    }
    private function formatCategory()
    {
        $template = "<p>";
        for ($n = 0; $n < count($this->category); $n++) {
            $template .= $this->category[$n];
        }
        $template .= "</p>";
        return $template;
    }
    public static function fetchAll()
    {
        $bookString = file_get_contents(__DIR__ . '/books_db.json');
        $bookList = json_decode($bookString, True);
        $books = [];
        foreach ($bookList as $item) {
        $price = rand(10, 100);
        $quantity = rand(1, 50);
        $books[] = new Books($item ['_id'],$item['title'], $item['thumbnailUrl'],$item['longDescription'],$item ['status'],$item ['authors'],$item ['categories'], $price, $quantity);        
        }
        return $books;
        // var_dump($movies);
    }
}
?>