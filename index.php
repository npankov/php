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
            'Bonnet en laine',
            'Bonnet en laine bio',
            'Bonnet en laine et cachemire',
            'Bonnet arc-en-ciel'
        ]
    ?>
    <table>
        <tr>
            <?php
            foreach($myArray as $element) {
            ?>
            <td>
                <?= $element; ?>
            </td>
            <?php
            }
            ?>
        </tr>
    </table>
</body>
</html>




<!-- 1. Utilisation des tableaux
Posons des données de base et un premier HTML :
    Créer une page html (balise <html>, <body>) dans un fichier PHP (index.php par exemple)
    y créer un tableau PHP contenant ces produits :
        Bonnet en laine
        Bonnet en laine bio
        Bonnet en laine et cachemire
        Bonnet arc-en-ciel
    afficher ces produits dans le html en utilisant une boucle (foreach conseillé), dans une balise HTML <table> -->