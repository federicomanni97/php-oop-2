<?php
    include __DIR__ . '/Views/header.php';
    include __DIR__ . '/Model/movie.php';
    $movies = Movie::fetchAll();
?>
<section class="container">
    <div class="row">
        <?php
        foreach ($movies as $movie) {
            $movie->movieCards();
        }
        ?>
    </div>
</section>
<?php
    include __DIR__ . '/Views/footer.php';
?>  