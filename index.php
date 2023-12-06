<?php
    include __DIR__ . '/Views/header.php';
    include __DIR__ . '/Model/movie.php';
    $movies = Movie::fetchAll();
?>
<section class="container">
    <h1 class="text-white">Movies</h1>
    <div class="row">
        <?php
        foreach ($movies as $movie) {
            // $movie->movieCards();
            $movie->printCard($movie->formatCards());
        }
        ?>
    </div>
</section>
<?php
    include __DIR__ . '/Views/footer.php';
?>  