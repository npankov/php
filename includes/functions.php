<?php
function findProduct($products, $id)
{
    foreach ($products as $product) {
        if ($product->getId() == $id) {
            return $product;
        }
    }
    return null;
}

function priceHT($price)
{
    return $price - $price / 100 * 20;
}

?>

<?php
function renderLine($product)
{
    ?>
    <tr>
        <td>
            <?= $product->getName(); ?>
        </td>
        <td>
            <?php foreach ($product->getSizes() as $size) {
            ?>
                <span><?= $size; ?></span>
                <?php }; ?>
        </td>
        <td>
            <?= priceHT($product->getPrice()) ?>$
        </td>
        <td>
            <span <?php if ($product->getPrice() >= 12) {
                echo 'style="color:green;"';
            } else {
                echo 'style="color:blue;"';
            }
            ?>
            >
            <?= $product->getPrice() ?>$
            </span>
        </td>
        <td>
            <?= $product->getDescription(); ?>
        </td>
        <td>
            <a href="?page=cart&id=<?= $product->getId() ?>&action=add" class="btn btn-danger">Ajouter au panier</a>
        </td>
    </tr>
    <?php
}

?>
