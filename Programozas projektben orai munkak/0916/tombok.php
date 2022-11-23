<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tömbök</title>
</head>
<body>
    <?php
        echo"<p>Hagyományos, index alapján:</p>";
        $hagyomanyos = array(10,20,   33   ,54);
        foreach ($hagyomanyos as $index => $ertek) {
            echo"[$index] = $ertek<br>";
        }

        echo"<p>Asszociatív, kulcs alapján:</p>";
        $asszociativ = array("elso" => 10, "második" => 20, "harmadik" => 33);
        foreach ($asszociativ as $kulcs => $ertek) {
            echo"[$kulcs] = $ertek<br>";
        }

        echo"<p>Vegyes elérésű:</p>";
        $vegyes = array("first" => 10, "második" => 30, 20, 54);
        foreach ($vegyes as $kulcs => $ertek) {
            echo"[$kulcs] = $ertek<br>";
        }

        echo"<p>Extrém használat:</p>";
        $extrem = array(-1 => "első", "második" => 20, 33);
        foreach ($extrem as $kulcs => $ertek) {
            echo"[$kulcs] = $ertek<br>";
        }
        $extrem[4] = "negyedik";
        echo"[4] hozzáadása után:<br>";
        foreach ($extrem as $kulcs => $ertek) {
            echo"[$kulcs] = $ertek<br>";
        }
        echo "az extrém tömb elemszáma: " . count($extrem);

        $extrem["utolsoElotti"] = 3.14;
        echo"végére rakunk 1 elemet<br>";
        $extrem[] = "vége";
        foreach ($extrem as $kulcs => $ertek) {
            echo"[$kulcs] = $ertek<br>";
        }

        echo"\"gyári\" asszociatív tömb:<br>";
        //phpinfo();
        echo $_SERVER["SCRIPT_NAME"];

        echo"<pre>";
        print_r($_SERVER);
        echo"</pre>";

        echo"Tömb a tömbben:<br>";
        $oldal = array(
            "index" =>"Kezdő", 
            "partner" => "Partnereink",
            "info" => "Rólunk"
        );
        $latogatva = array(33, 254, 25);
        $statisztika = array("oldalak" => $oldal, "latogatokSzama" => $latogatva);

        echo"<pre>";
        print_r($statisztika);
        echo"</pre>";

        $oldalNeve = $statisztika["oldalak"]["partner"];
        $lsz = $statisztika["latogatokSzama"][1];
        echo"oldal: $oldalNeve, látogatók száma: $lsz";
    ?>
</body>
</html>