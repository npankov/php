<?php
    include_once './includes/header.php'
?>
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
<?php
    include_once './includes/footer.php'
?>