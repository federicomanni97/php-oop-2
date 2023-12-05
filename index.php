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
            // $movie -> sconto = 20;
            // if ($movie-> title == 'Gunfight at Rio Bravo') {
            //     $movie -> sconto = 20;
            // }
            // echo $movie->sconto;
        }
        ?>
    </div>
</section>
<?php
    include __DIR__ . '/Views/footer.php';
?>  