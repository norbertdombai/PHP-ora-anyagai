<?php
    require_once("inc.php");
    session_start();
    if(!check()){
        header("Location:login.php");
        exit();
    }
    if(isset($_POST["log"])){
        $fn = $_SESSION["user"] . ".txt";
        $fh = fopen($fn, "a+");
        $log = $_POST["log"] . "\r\n";
        fwrite($fh, $log);
        fclose($fh);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejegyzés írása</title>
</head>
<body>
<h1>Új bejegyzés</h1>
    <form action="" method="POST">
        <p>
            <textarea name="log" id="log" cols="30" rows="10"></textarea>
        </p>
        
        <p>
            <input type="submit" value="Rögzít" name="rogzit" id="rogzit">
        </p>
    </form>
    <a href="logout.php">kilépés</a>
</body>
</html>