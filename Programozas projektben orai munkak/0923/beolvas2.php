<?php
    $fn = "lorem.txt";//File Name

    echo "<h1>file függvény használattal:</h1>";

    $tomb = file($fn);
    foreach ($tomb as $sor) {
        echo"$sor<br>";
    }

    /*az utolsó enter után nem csinál elemet
    */
    echo"<pre>";
    print_r($tomb);
    echo"</pre>";

    
?>