<div class="row flex-column">
    <div class="col">
        <table class="table">
            <tr>
                <th>Nom</th>
                <th>Prix HT</th>
                <th>Prix TTC</th>
                <th>Description</th>
                <th></th>
            </tr>
            <?php
            foreach ($products as $id => $element) {
                renderLine($element, $id);
            }
            ?>
        </table>
    </div>
    <div class="col">
        <a href="?page=home" class="btn btn-primary">Bonnets preferé</a>
    </div>
</div>
