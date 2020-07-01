<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>

        <?php
        $str1 = "La maîtrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage sérieux et utile."
        ?>

        <?php
        $nb_caractère = 160;
        $nb_mots = 27;

        ?> 

        <p><?php
            function message_1 ($nb_caractère, $str1) {
            echo "La chaine $str1 contient $nb_caractère caractères."; 
        }
            function message_2 ($nb_mots, $str1) {
            echo "La chaine $str1 contien $nb_mots mots.";
        } 
        function minuscule ($str1, $filter_var) {
            $filter_var = minuscule ;
            echo "$str1";
        }
        function majuscule ($str1, $filter_var) {
            $filter_var = majuscule ;
            echo "$str1";
        }
        function mélanger ($str1, $filter_var) {
            $filter_var = mélanger ;
            echo "$str1";
        }
        function la_LA ($str1, $filter_var) {
            $filter_var = LA ;
            echo "$str1";
        }
        function out ($str1, $filter_var) {
            $filter_var = j ;
            echo "$str1";
        }




        ?></p> 



    </body>
</html> 