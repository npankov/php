<?php
    $size = filter_input(INPUT_POST, 'size');
//    var_dump($size);

    $searchedProducts = array_filter($products, function (Beanie $beanie) use ($size) {
        return in_array($size, $beanie->getSizes());
    });

//    var_dump($products);
?>


<div>
    <div class="row">
        <form class="d-flex" method="post">
            <div class="form-group col-md-6">
                <label for="inputState">Taille</label>
                <select name="size" id="inputState" class="form-control">
                    <option selected>...</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XXL</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Matière </label>
                <select id="inputState" class="form-control">
                    <option selected>...</option>
                    <option>Laine</option>
                    <option>Laine bio</option>
                    <option>Laine et cachemire</option>
                    <option>Arc-en-ciel</option>
                </select>
            </div>
            <div>
                <label for="inputState">Action</label>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <div class="row flex-column">
        <div class="col">
            <table class="table">
                <tr>
                    <th>Nom</th>
                    <th>Taille</th>
                    <th>Prix HT</th>
                    <th>Prix TTC</th>
                    <th>Description</th>
                    <th></th>
                </tr>
                <?php

                foreach ($products as $element) {
                    if (in_array($size, $element->getSizes())) {
                        renderLine($element);
                    }
                    if ($size == null || $size == '...') {
                        renderLine($element);
                    }
                }
                ?>
            </table>
        </div>
        <div class="col">
            <a href="?page=home" class="btn btn-primary">Bonnets preferé</a>
        </div>
    </div>
</div>

