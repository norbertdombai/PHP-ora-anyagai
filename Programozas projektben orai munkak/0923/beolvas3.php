<?php
    echo "<h1>fpassthru függvény használattal:</h1>";
    $fn = "lorem.txt";//File Name
    $fh = fopen($fn, "r");//File Handler
    $beKarDb = fpassthru($fh);//nem zárja
    echo "<p>beolvasott karakterek száma: " . $beKarDb . "</p>";
    //fclose($fh);
    rewind($fh);//újra előre
    fpassthru($fh);
    exit;

    
?>