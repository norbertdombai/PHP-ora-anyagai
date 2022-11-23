<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ismétlés</title>
    <style>
        img{ width: 200px; }
    </style>
</head>
<body>
    <?php
        if(date("s") % 2 == 0){
    ?>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione quibusdam et expedita architecto sint animi quam, temporibus voluptas quia quaerat iste officiis odio! Sit sint adipisci laudantium nesciunt, dicta alias.
    </p>

    <?php
        }else{
            echo "valmi";
        }
    ?>

    <?php
        $fajl = "kepek/htmlCode.jpg";
        echo "<img src=$fajl alt='html kód' title='html kód'>";
    ?>

    <p>
        <img src=<?php echo $fajl; ?>  alt='html kód' title='html kód'>
    </p>

    <h1>Tömbök a PHP-ban</h1>
    <?php
        $tomb = array("arany", "ezüst", "bronz", "vas");
        echo"<pre>";
        print_r($tomb);
        echo"</pre>";

        echo"<h2>Elemek elérése:</h2>";
        echo "0. index értéke: " . $tomb[0] . "<br>";
        $utolso = count($tomb) - 1;
        echo "$utolso. index értéke: " . $tomb[$utolso] . "<br>";

        echo"<h2>Tömb bejárása:</h2>";
        foreach ($tomb as $elem) {
            echo"vizsgált elem értéke: " . $elem . "<br>";
        }

    ?>

    <a href="tombok.php">tömbök</a>
</body>
</html>