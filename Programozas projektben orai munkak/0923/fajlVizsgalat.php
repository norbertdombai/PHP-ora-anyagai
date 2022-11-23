<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fájl  vizsgálat</title>
</head>
<body>
    <h1>Fájl vizsgálat</h1>
    <?php
        $fajlNeve = $_SERVER["SCRIPT_FILENAME"];
        if(file_exists($fajlNeve)){
            echo '<p>"' . $fajlNeve . '" létezik </p>';

            if(is_dir( $fajlNeve)){
                echo '<p>"' . $fajlNeve . '" könyvtár </p>';
            }else{
                echo '<p>"' . $fajlNeve . '" NEM könyvtár </p>';
            }

            if(is_readable( $fajlNeve)){
                echo '<p>"' . $fajlNeve . '" olvasható </p>';
            }else{
                echo '<p>"' . $fajlNeve . '" NEM olvasható </p>';
            }

            if(is_writable( $fajlNeve)){
                echo '<p>"' . $fajlNeve . '" írható </p>';
            }else{
                echo '<p>"' . $fajlNeve . '" NEM írható </p>';
            }

            if(is_executable( $fajlNeve)){
                echo '<p>"' . $fajlNeve . '" futtatható </p>';
            }else{
                echo '<p>"' . $fajlNeve . '" NEM futtatható </p>';
            }

        }else{
            echo '<p>"' . $fajlNeve . '" NEM létezik </p>';
        }
    ?>
</body>
</html>