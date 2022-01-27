<?php
    include_once './includes/header.php'
?>
<div class="row flex-column">
    <div class="col">
        <table class="table">
            <tr>
                <th>Nom</th>
                <th>Prix HT</th>
                <th>Prix TTC</th>
                <th>Description</th>
            </tr>
            <?php
            foreach($myArray as $element) {
                renderLine($element);
            }
            ?>
        </table>
    </div>
    <div class="col">
        <a href="index.php" class="btn btn-primary">Bonnets preferé</a>
    </div>
</div>

<?php
    include_once './includes/footer.php'
?>