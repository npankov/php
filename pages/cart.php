<?php

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $id = null;
    $product = null;

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $product = $products[$id];
    }

    if ($action === 'add' && !empty($product)) {
        if (!isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] = 0;
        }
        $_SESSION['cart'][$id] += 1;

    } elseif ($action === 'del' && !empty($product)) {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] -= 1;

            if ($_SESSION['cart'][$id] <= 0) {
                unset($_SESSION['cart'][$id]);
            }
        }
    } elseif ($action === 'empty') {
        $_SESSION['cart'] = [];
    }
    header('Location: ?page=cart');
}
?>

<table class="table">
    <tr>
        <th>Nom</th>
        <th>Prix unitaire</th>
        <th>Quantity</th>
        <th>Prix total</th>
    </tr>

    <?php
    $total = 0;
    foreach ($_SESSION['cart'] as $id => $quantity) {
        $product = $products[$id];
        $price = $product[1] * $quantity;
        $total += $price;
        ?>

        <tr>
            <td> <?= $product[0] ?> </td>
            <td> <?= $product[1] ?> $</td>
            <td>
                <a href="?page=cart&action=del&id=<?= $id ?>">-</a>
                <?= $quantity ?>
                <a href="?page=cart&action=add&id=<?= $id ?>">+</a>
            </td>
            <td> <?= $product[1] * $quantity ?> $</td>
        </tr>

        <?php
    }
    ?>

    <tr>
        <th colspan="3">Total à payer:</th>
        <th> <?= $total ?> $</th>
    </tr>
    <tr>
        <th colspan="4">
            <a href="?page=cart&action=empty" class="btn btn-danger">Vider le panier</a>
        </th>
    </tr>
</table>

