<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafikus Számláló</title>
</head>
<body>
    <?php
        $fn = "szam.txt";
        //lehet, h létezik, csak nincs olvasási jogom
        if(is_readable($fn)){
            $fh = fopen($fn, "r");
            $szam = fgets($fh);
            fclose($fh);
        }else{
            $szam = 0;
            /*ha létezést vizsgálnánk,
            akkor itt létre lehetne hozni
            */
        }

        $szam++;

        if(!file_exists($fn) || is_writable($fn)){
            $fh = fopen($fn, "w");
            //fputs($fh, $szam);
            fwrite($fh, $szam);
            fclose($fh);
        }

        $grafSzam = sprintf("%05d", $szam);

        /* minta szerinti szöveg cserélés:
        Az 1. paraméter a minta, a 2. amire cserélünk, a 3. amiben
        A minta azt mondja, hogy számokat cseréljünk a 2. paraméterre:
        minden szám helyén az <img...> sor lesz.
        A mintában (1. paraméter) a () hatására a megtalált számot kicseréli a 
        2. paraméter \1 helyére, ahol a \1 az első zárójelezett () csoportra utal
        */
        $grafSzam = preg_replace("/(\d)/",'<img src="szamok/\1.gif" alt="">', $grafSzam);

        echo $grafSzam;
    ?>

    
</body>
</html>