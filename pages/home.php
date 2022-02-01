<div class="row">
    <?php
    $count = 0;
    foreach ($products as $product) {
        $count++;
        ?>

        <div class="card mx-2" style="width: 18rem;">
            <img src="<?= $product->getImage(); ?>" class="card-img-top" alt="...">
            <div class="card-body d-flex justify-content-center flex-column">
                <h5 class="card-title" style="font-size: 1.2rem"><?= $product->getName(); ?></h5>
                <p class="card-text"><?= $product->getDescription(); ?></p>
                <a href="?page=list" class="btn btn-primary">Liste de bonnets</a>
            </div>
        </div>

        <?php
        if ($count >= 3) {
            break;
        }
    }
    ?>
</div>