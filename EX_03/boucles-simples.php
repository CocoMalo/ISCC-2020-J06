<!DOCTYPE html>
<html> 
    <head>
    </head>

    <body>
        <?php
        
        $maximum = 10; 

            function compter ($maximum) {
                $compter = 1;
                while ($compter = $maximum){ 
                    $compter = $compter + 1;
                }
                echo $compter ; 
             }
            
            function compter_for ($maximum) { 
                for ($compter = 1;
                $compter = maximum;
                $compter = $compter + 1) { 
                    echo "$compter + 1";
                }
            }
    
        ?>
    </body>

</html>