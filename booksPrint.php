<?php
    include __DIR__ . '/Views/header.php';
    include __DIR__ . '/Model/Books.php';
    $books = Books::fetchAll();
?>
<div class="container">
    <h1>Books</h1>
    <div class="row">
        <?php
            foreach ($books as $book) {
                $book -> booksCards();
            }
        ?>
    </div>
</div>