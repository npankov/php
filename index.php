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
                <?= $element[1]; ?>$
            </td>
            <td>
                <?= $element[2]; ?>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>




<!-- 2. Tableaux imbriqués
    Nous voulons maintenant un peu plus d'informations sur nos produits. Commençons par un prix et une description.
    Complexifions les données et transformons nos données en tableaux :
        Bonnet en laine : 10€
        Bonnet en laine bio : 14€
        Bonnet en laine et cachemire : 20€
        Bonnet arc-en-ciel : 12€
    Tous les produits vont également avoir la même description : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.
    Mettre à jour l'affichage en conséquence -->