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
         include './includes/variables.php';
         include './includes/functions.php';

            foreach($myArray as $element) {
                renderLine($element);
            }
        ?>
    </table>
</body>
</html>


<!-- 7. Utiliser git
8. Mise en place d'un layout

Ce que j'appelle layout : nous allons découper notre HTML pour en extraire les éléments communs (balises <html>, <head>, <body>, etc.) et les mettre dans des fichiers qui vont être inclus dans toutes nos pages.

    Créer un dossier includes et y ajouter les fichiers contenant les variables et les fonctions
    Dans ce dossier, y ajouter un fichier header.php et un fichier footer.php

#
9. Header

L'idée est ici de regrouper la plus grande partie du code commun, pour l'inclure dans toutes nos pages (et donc, réduire le nombre de fois où on a besoin de l'écrire).

    Dans header.php, déplacer les includes des fichiers de variables et de fonctions (remplacer les includes par des require_once et rechercher ce que fait cette fonction)
    Ajouter le html qui va être commun à toutes nos pages (balises <html>, <head>, <body>, etc.)
    Inclure le fichier header.php dans la page de liste des bonnets -->