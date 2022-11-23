<?php
$menu = "<p>"
        . "<a href='index.php'>&lt;vissza</a>"
        . " | " 
        . '<a href="Tomb1.php">tömb 1</a>'
        . "</p>";
?><!DOCTYPE html>
<html>
    <head>
        <?php include './head.inc.php'; ?>
        <title>Táblázat</title>
    </head>
    <body>
        <?php echo $menu; ?>
        
        <h1>Tömb elemei táblázatban, formázva</h1>
        
        <table> 
            <tr>
                <th>ID</th><th>NÉV</th></th>
            </tr>
            <!-- táblázat egy sora, ezt kell legenerálni 
            <tr><td>1</td><td>Péter</td></tr>-->
        <?php
        $nevTomb = array("Péter", "Pál", "Petra", "Piroska", "Xénia");
        //táblázat sorainak generálása:
        /*for($i=0; $i<count($nevTomb); $i++){
            echo"<tr><td>" . $i+1 . 
                "</td><td>$nevTomb[$i]</td></tr>";
        }*/
        //táblázat sorainak generálása "szép kóddal":
        for($i=0; $i<count($nevTomb); $i++){
            $nyitoTr = "\t<tr>";
            if($i > 0){$nyitoTr = "\t\t\t<tr>";}
            echo"$nyitoTr\n\t\t\t\t<td>" . $i+1 . 
                "</td><td>$nevTomb[$i]</td></tr>\n";
        }
        ?>
        </table>
        
        <?php echo $menu; ?>
    </body>
</html>
