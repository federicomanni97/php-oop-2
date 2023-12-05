<?php
    include __DIR__ . '/Views/header.php';
    include __DIR__ . '/Model/Games.php';
    $games = Games::fetchAll();
?>
<div class="container">
    <h1 class="text-white">Games List</h1>
    <div class="row">
        <?php
            foreach ($games as $game) {
                $game -> gamesCards();
            }
        ?>
    </div>
</div>