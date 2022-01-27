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
         include 'variables.php';
         include 'functions.php';

            foreach($myArray as $element) {
                renderLine($element);
            }
        ?>
    </table>
</body>
</html>


<!-- 6. Séparation des fichiers
    Nous allons maintenant séparer notre code en plusieurs éléments, à thème. L'idée est ici d'avoir des fichiers plus spécialisés et rapides à retrouver.
    Séparer le code en plusieurs fichiers php :
        Un pour les variables
        Un autre pour les fonctions
        Un pour le HTML
    Appeler ces fichiers dans le HTML (utiliser include pour appeler les différents fichiers (opens new window) où vous le souhaitez) -->