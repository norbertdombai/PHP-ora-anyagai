<?php
session_start();
if(!isset($_SESSION["belepve"]) || $_SESSION["belepve"] != true){
    header("location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tartalom 2</title>
</head>
<body>
    <h1>Ez a titkos tartalom</h1>
    <p>
        <a href="tartalom.php">&laquo; vissza</a>
    </p>
    <p>
        <a href="kilepes.php">kijelentkezés</a>
    </p>
</body>
</html>