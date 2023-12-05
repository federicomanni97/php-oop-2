<?php
    include __DIR__ . '/Product.php';

    class Games extends Product
    {
        private string $title;
        private string $poster_path;

        function __construct($title, $poster_path, $price, $quantity){
            parent::__construct($price, $quantity);
            $this->title = $title;
            $this->poster_path = $poster_path;
        }
        public function gamesCards()
        {
        $title = $this->title;
        $poster_path = $this-> poster_path;        
        $overview = '';
        $vote = '';
        $genre = '';
        $price = $this -> price;
        $quantity = $this -> quantity;
        include __DIR__ . '/../Views/card.php';
        }
        public static function fetchAll()
        {
            $gameString = file_get_contents(__DIR__ . '/steam_db.json');
            $gameList = json_decode($gameString, True);
            $games = [];
            foreach ($gameList as $item) {
            $price = rand(10, 100);
            $quantity = rand(1, 50);
            $games[] = new Games($item ['name'], $item['img_icon_url'], $price, $quantity);
            }
            return $games;
            // var_dump($movies);
        }
    }
?>