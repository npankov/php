<?php
    include_once './includes/header.php';
?>

<div class="row">
    <?php
        $count = 0;
        foreach ($myArray as $element) {
            $count++;
            ?>

            <div class="card mx-2 com" style="width: 18rem;">
              <img src="<?= $element[3]; ?>" class="card-img-top" alt="...">
              <div class="card-body d-flex justify-content-center flex-column">
                <h5 class="card-title" style="font-size: 1.2rem"><?= $element[0]; ?></h5>
                <p class="card-text"><?= $element[2]; ?></p>
                <a href="list.php" class="btn btn-primary">List de bonnets</a>
              </div>
            </div>

            <?php
            if ($count >= 3) {
                break;
            }
        }
    ?>
</div>

<?php
    include_once './includes/footer.php';
?>