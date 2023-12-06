<?php
include __DIR__ . '/genre.php';
include __DIR__ . '/Product.php';
// include __DIR__ . '/../Traits/DrawCard.php';

class Movie extends Product
{
    private int $id;
    private string $original_title;
    private string $overview;
    private float $vote_average;
    private string $poster_path; 
    private string $original_language;
    public array $genre;

    function __construct($id, $title, $overview, $vote, $language, $postermovie, $genre, $price, $quantity)
    {
        parent::__construct($price, $quantity);
        $this->id = $id;
        $this->original_title = $title;
        $this->overview = $overview;
        $this->vote_average = $vote;
        $this->original_language = $language;
        $this->poster_path = $postermovie;
        $this->genre = $genre;
    }

    public function starsVote()
    {
        $vote = ceil($this->vote_average / 2);
        $template = "<p>";
        for ($n = 1; $n <= 5; $n++) {
            $template .= $n <= $vote ? '<i class="fa-solid fa-star text-warning"></i>' : '<i class="fa-regular fa-star text-dark"></i>';
        }
        $template .= '</p>';
        return $template;
    }
    public function formatCards()
    {
        $cardItem = [
            'poster_path' => $this->poster_path,
            'title' => $this->original_title,
            'overview'=> $this -> overview,
            'vote' => $this -> starsVote(),
            'genre' => $this -> formatGenres(),
            'price' => $this -> salesPrice($price),
            'quantity' => $this -> quantity,
            // include __DIR__ . '/../Views/card.php';
        ];
        return $cardItem;
        // $poster_path = $this-> poster_path;
        // $title = $this->original_title;
        // $overview = $this -> overview;
        // $vote = $this -> starsVote();
        // $genre = $this -> formatGenres();
        // $price = $this -> price;
        // $quantity = $this -> quantity;
        // include __DIR__ . '/../Views/card.php';
    }

    private function formatGenres()
    {
        $template = "<p>";
        for ($n = 1; $n < count($this->genre); $n++) {
            $template .= $this->genre[$n]-> drawGenre();
        }
        $template .= "</p>";
        return $template;
    }
    
    public static function fetchAll()
    {
        $movieString = file_get_contents(__DIR__ . '/movie_db.json');
        $movieList = json_decode($movieString, True);
        $genres = Genre::fetchAll();
        $movies = [];
        foreach ($movieList as $item) {
        $price = rand(10, 100);
        $quantity = rand(1, 50);
        $movies[] = new Movie($item ['id'], $item['original_title'], $item['overview'], $item['vote_average'], $item['original_language'], $item['poster_path'], $genres, $price, $quantity);
        }
        return $movies;
        // var_dump($movies);
    }
    
}

// $genreString = file_get_contents(__DIR__ . '/genre_db.json');
// $genreList = json_decode($genreString, True);
// $genres = [];
// foreach ($genreList as $item) {
//     array_push($genres, $item);
// }
// $movieString = file_get_contents(__DIR__ . '/movie_db.json');
// $movieList = json_decode($movieString, True);
// $movies = [];
// foreach ($movieList as $item) {
//     $movies[] = new Movie($item ['id'], $item['original_title'], $item['overview'], $item['vote_average'], $item['original_language'], $item['poster_path'], $genres[rand(0, count($genres) -1)], $quantity, $price);
// }

// $quantity = rand(0,100);
// $price= rand(5, 200);
?>