<!DOCTYPE html>
<!-- 
ha letöltve a xampp csomag és telepítve a C: meghajtóra
ha ez a file a c:/xampp/htdocs/ mappán belül van (itt most: c:/xampp/htdocs/eszf2/0909/elso/public_html/),
akkor a böngásző URL:
http://localhost/eszf2/0909/elso/public_html/elso.php 
a localhost az a c:/xampp/htdocs/ elérést jelnti
-->
<html>
    <head>
        <title>első php oldal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>
            ez egy bekezdés
        </p>
        <!-- <h2> -->
            <?php
                //echo("ez egy php kiírás...");
                echo"<h2>";
                echo "idő: " . date("Y.m.d H:i:s");
                echo"</h2>\n";
            ?>
        <!-- </h2> -->
        
        <h5>CsP 2021</h5>
    </body>
</html>
