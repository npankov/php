<?php
require_once './includes/header.php'
?>
    <table>
         <?php
         include './includes/variables.php';
         include './includes/functions.php';

            foreach($myArray as $element) {
                renderLine($element);
            }
        ?>
    </table>
<?php
require_once './includes/footer.php'
?>


<!-- 9. Header

    L'idée est ici de regrouper la plus grande partie du code commun, pour l'inclure dans toutes nos pages (et donc, réduire le nombre de fois où on a besoin de l'écrire).
    Dans header.php, déplacer les includes des fichiers de variables et de fonctions (remplacer les includes par des require_once et rechercher ce que fait cette fonction)
    Ajouter le html qui va être commun à toutes nos pages (balises <html>, <head>, <body>, etc.)
    Inclure le fichier header.php dans la page de liste des bonnets

    10. Footer
    Dans footer.php, ajouter le html commun à toutes nos pages se trouvant après le php
    Inclure ce fichier footer.php dans la page de liste
    -->