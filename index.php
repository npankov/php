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
                ><?= $element[1] ?>$
                </span>
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




<!-- 4. Fonctions
    Une pensée pour les professionnels qui ont besoin de se couvrir ! Pour eux, il faudrait afficher les prix sans TVA.
    Nos prix étaient ici TTC (incluaient la TVA), nous allons faire une fonction calculant le montant hors taxes d'un produit.
    Afficher les prix HT dans la colonne avant celle des prix TTC -->