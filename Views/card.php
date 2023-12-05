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
            <div class="d-flex justify-content-between align-items-flex-start">
                <?= $vote ?>
                <div>
                    <?= $genre ?>
                </div>
            </div>
        </div>
    </div>
</div>