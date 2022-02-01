<?php
function renderLine($element, $id)
{
    ?>
    <tr>
        <td>
            <?= $element[0]; ?>
        </td>
        <td>
            <?= $element[1] - $element[1] / 100 * 20; ?>$
        </td>
        <td>
            <span <?php if ($element[1] >= 12) {
                echo 'style="color:green;"';
            } else {
                echo 'style="color:blue;"';
            }
            ?>
            >
            <?= $element[1] ?>$
            </span>
        </td>
        <td>
            <?= $element[2]; ?>
        </td>
        <td>
            <a href="?page=cart&id=<?= $id ?>&action=add" class="btn btn-danger">Ajouter au panier</a>
        </td>
    </tr>
    <?php
}
