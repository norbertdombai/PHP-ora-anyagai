<?php
/* itt nem szabad kiírni semmit! */
$szam = $_SERVER["QUERY_STRING"];
$hiba = "";
$cim = "${szam}x$szam";
//=== az értéknek és a típusnak is egyeznie kell
if($szam === ""){
    $hiba = "Helyes használat: URL?pozitív egész szám";
}else if(preg_match("/\D/", $szam) || $szam <= 0){
    $hiba = "csak pozitív egész számokat lehet megadni";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szorzótábla <?php echo"$cim"; ?></title>
    <link rel="stylesheet" href="szt.css">
</head>
<body>
    <h1><?php echo"$cim"; ?></h1>
    <table>
    <?php
        if($hiba != ""){
            echo $hiba;
        }
        else{
            $sor = $oszl = $szam;
            for ($s=1; $s <= $sor; $s++) { 
                echo "\n<tr>";
                for ($o=1; $o <= $oszl; $o++) { 
                    echo "\n\t<td>" . $s*$o . "</td>";
                }
                echo "</tr>\n";
            }
        }
        
    ?>
    </table>

    <p>
    <?php
        for ($i = 2; $i <= 8 ; $i += 2) {
            echo"<a href='?$i'>${i}x$i</a> | ";
        }
    ?>
    </p>

    <p><a href="?3">3x3</a> | <a href="?5">5x5</a> | <a href="?10">10x10</a></p>
    <p><a href="?12">12x12</a></p>
    <p><a href="?15">15x15</a></p>

</body>
</html>