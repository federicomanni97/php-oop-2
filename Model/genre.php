<?php 
 class Genre{

    public $genre;
    function __construct($genre){
        $this->genre = $genre;
    }
    public function drawGenre()
    {
        return "<span>$this->genre</span>";
    }
    public static function fetchAll()
    {
        $genreString = file_get_contents(__DIR__ . '/genre_db.json');
        $genreList = json_decode($genreString, True);
        $genres = [];
        foreach ($genreList as $item) {
            $genre = new Genre($item);
            array_push($genres, $genre);
        }
        return $genres;
    }
 }
?>