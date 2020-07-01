<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
        <?php 

            function compter_dizaine ($maximum){ 
                if ($maximum%10){
                    echo "Ceci est une dizaine.";
                 }
                else ($maximum%100){
                    echo "Ceci est une centaine.";
                 }

            }
            $maximum = 100;

        ?>

    </body>
</html>