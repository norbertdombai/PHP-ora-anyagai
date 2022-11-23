<?php
    $fn = "lorem.txt";//File Name
    $fh = fopen($fn, "r");//File Handler

    echo "<h1>fopen használattal:</h1>";

    echo "fájl erőforrás azonosítója: $fh<br>";

    echo "fájl tartalma:<br>";
    $sorDb = 0;
    while(!feof($fh)){
        $sor = fgets($fh);
        echo $sor;
        $sorDb++;
    }

    fclose($fh);

    //beolvasta az üres sort is
    echo $sorDb;
?>