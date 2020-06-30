<!DOCTYPE html>
<html> 
    <head>
    </head>

    <body>
        <?php
        function update_dispo($quantité) {

            if ($quantité>0){ 
                $true ; }
            else 
                {$false; }
         }
        
        function restockage ($quantité, $nb_ajout) { 
             return $quantité+$nb_ajout;

             echo "<p> $nb_ajout produits ont étés ajoutés au stock. </p>";
         }
        restockage (10,)
        ?>
        
        <?php 
        function achat ($quantité, $nb_achat) { 
            return $quantité-$nb_achat;
            
            echo "<p> $nb_achat produits ont été ajoutés acheté. </p>";
        }
        achat (10,)

        ?>
    </body>

</html>