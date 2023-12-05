<?php
    class Games 
    {
        private string $title;
        private string $poster_path;

        function __construct($title, $poster_path){
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
        include __DIR__ . '/../Views/card.php';
        }
        public static function fetchAll()
        {
            $gameString = file_get_contents(__DIR__ . '/steam_db.json');
            $gameList = json_decode($gameString, True);
            $games = [];
            foreach ($gameList as $item) {
            $games[] = new Games($item ['name'], $item['img_icon_url']);
            }
            return $games;
            // var_dump($movies);
        }
    }
?>