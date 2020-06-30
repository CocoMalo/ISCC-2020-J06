<!DOCTYPE html>
<html> 
    <head>
    </head>

    <body>
        <?php
        function update_dispo($quantité) : float {

            if ($quantité>0){ 
                $true ; }
            else 
                {$false; }
         }
         function restockage ($quantité, $nb_ajout) { 
             echo "<p> $nb_ajout produits ont étés ajoutés au stock. </p>";
         }

        ?>
    </body>

</html>