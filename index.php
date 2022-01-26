<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $myArray = [
            ['Bonnet en laine', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'],
            ['Bonnet en laine bio', 14, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'],
            ['Bonnet en laine et cachemire', 20, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.'],
            ['Bonnet arc-en-ciel', 12, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.']
        ]
    ?>
    <table>
         <?php
            foreach($myArray as $element) {
        ?>
        <tr>
            <td>
                <?= $element[0]; ?>
            </td>
            <td <?php if ($element[1] >= 12) {
                echo 'style="color:green;"';
            } else {
                echo 'style="color:blue;"';
            }
                ?>
            >
                Prix: 
                <?= $element[1] ?>$
            </td>
            <td>
                Description: <?= $element[2]; ?>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>




<!-- 3. Conditions
On va faire ressortir visuellement les prix de nos produits, et encore plus ceux qui ne sont pas cher !
    Si un prix est inférieur ou égal à 12€, afficher le prix en vert, sinon l'afficher en bleu. -->