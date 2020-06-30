<!DOCTYPE html>
<html> 
    <head>
    </head>

    <body>

        <?php
            function afficher_titre ($nom_produit) {
                echo "<h1> Fiche produit : $nom_produit </h1>";
            }
            affichage ("T-shirt femme");
        ?>

        <?php 
           function afficher_description ( $couleur, $prix) {
            echo "<p> Couleur : $couleur, Prix : $prix </p>";
            }
            afficher_description ("Rouge", 15.50);
        ?>

        <?php
            function afficher_produit ($nom_produit, $couleur, $prix, $disponible) { 

                if ($disponible==true) {
                affichage_titre ();
                affichage_description(); }
            
                else
                {echo "<p> Le produit $nom_produit n'est malheuresement plus disponible.</p>"; }
            }
            affichage ("T-shirt femme", "Rouge", 15.50);
        ?> 

    </body>
</html> 