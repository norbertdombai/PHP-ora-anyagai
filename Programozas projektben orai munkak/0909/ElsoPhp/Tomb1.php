<?php
$menu = "<p>"
        . "<a href='index.php'>&lt;vissza</a>"
        . " | " 
        . '<a href="Tomb1.php">táblázat</a>'
        . "</p>";
?><!DOCTYPE html>
<html>
    <head>
        <?php include './head.inc.php'; ?>
        <title>Tömbök I.</title>
    </head>
    <body>
        <!-- <p><a href='index.php'>&lt;vissza</a></p> -->
        <?php echo $menu; ?>
        
        <?php
            /* tömb deklarálás */
            $szamTomb = array(3,5,1,34,56);
            
            /* megnézzük, hogy mi van benne: 
              csak debug célra, ez nem a user-nek van!!!  
            */
            echo"<pre>ez van a tömbben, csak fejlesztési célra:";
            print_r($szamTomb);//ha tömböt nézünk: print_r
            echo"</pre>";
            
            /* tömb elemeinek elérése: */
            $elso = $szamTomb[0];
            $hossz = count($szamTomb);
            $utolso = $szamTomb[$hossz - 1];
            
            /* tömb bejárása: */
            echo"<p>Tömb bejárása:</p>";
            foreach ($szamTomb as $elem) {
                echo $elem . " ";
            }
            
            echo"<p>Elemek indexelése:</p>";
            for($i=0;$i<$hossz;$i++){
                echo"[$i]=$szamTomb[$i]<br>";
            }
        ?>
        
        <!-- <p><a href='index.php'>&lt;vissza</a></p> -->
        <?php echo $menu; ?>
        
        <pre><!-- előre formázott tartalom -->
        1. sor
        2. sor és tab:  tab után
              szóköz
        </pre>
    </body>
</html>
