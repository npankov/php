<?php
    $myArray = [
        ['Bonnet en laine', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'],
        ['Bonnet en laine bio', 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'],
        ['Bonnet en laine et cachemire', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'],
        ['Bonnet arc-en-ciel', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.']
    ];


function renderLine($element) {
    ?>
    <tr>
        <td>
            <?= $element[0]; ?>
        </td>
        <td>
            Prix HT: <?= $element[1] - $element[1] / 100 * 20; ?>
        </td>
        <td>
            Prix: 
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
            Description: <?= $element[2]; ?>
        </td>
    </tr>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
         <?php
            foreach($myArray as $element) {
                renderLine($element);
            }
        ?>
    </table>
</body>
</html>




<!-- 5. Manipulation des chaines de caractère et des variables
    Faire une fonction qui affiche un produit (va reprendre l'affichage d'une ligne du tableau)
    Appeler cette fonction dans la boucle -->