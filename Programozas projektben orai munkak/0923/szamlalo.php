<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Számláló</title>
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

        echo "Megtekintve: " . ++$szam;

        if(!file_exists($fn) || is_writable($fn)){
            $fh = fopen($fn, "w");
            //fputs($fh, $szam);
            fwrite($fh, $szam);
            fclose($fh);
        }
    ?>
</body>
</html>