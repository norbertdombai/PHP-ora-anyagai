<?php
$titkos = "titkos jelszó";
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include './head.inc.php'; ?>
        <title>Php változók</title>
    </head>
    <body>
        <h1>Változók kezelése</h1>
        <?php
        $nev = "Peti";
        echo"<p>Szia $nev!</p>";//"" használható a változó
        echo'<p>Szia $nev!</p>';//'' NEM használható a változó
        echo"<p>Szia ${nev}ke!</p>";
        echo"<p>Szia" .$nev . "!</p>";//hagyományos összefűzés
        
        /* számolás: */
        $szam = 7;
        echo "$szam + $szam = " . $szam+$szam . "<br>";
        echo "$szam * $szam = " . $szam*$szam . "<br>";
        
        echo "<h1>titok: $titkos</h1>";
        ?>
        
        <p><a href="Tomb1.php">tömb</a></p>
    </body>
</html>
