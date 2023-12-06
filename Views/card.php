<div class="col-12 col-md-4 col-lg-3 g-5">
    <div class="card">
        <img src="<?= $poster_path ?>" class="card-img-top my-ratio" alt="<?= $title ?>">
        <div class="card-body">
            <h5 class="card-title">
                <?= $title ?>
            </h5>
            <p class="card-text ">
                <?= $overview ?>
            </p>
            <p>
                <?= $vote ?>
            </p>  
            <div class="g-1">
                <?= $genre ?>
            </div>
            <div class="d-flex justify-content-between align-items-flex-start">
                <div>
                    <span>&euro; </span>
                    <?= $price ?>
                </div>
                <div>
                    <span>In Stock:</span>
                    <?= $quantity ?>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
</div>