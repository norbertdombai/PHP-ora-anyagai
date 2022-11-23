<?php
require_once("inc.php");
session_start();
if(!check()){
    header("Location:login.php");
    exit();
}

if(isset($_POST["name"])){
    $name = $_POST["name"];
    $psw = $_POST["psw"] . "\r\n";
    $fh = fopen("protected/users.txt", "a+");
    fwrite($fh, "$name:$psw");
    fclose($fh);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
</head>
<body>
<h1>Új user felvétele</h1>
    <form action="" method="POST">
        <p>
            <label for="name">Név:</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="psw">Jelszó:</label>
            <input type="text" name="psw" id="psw">
        </p>
        <p>
            <input type="submit" value="Felvesz" name="felvesz" id="felvesz">
        </p>
    </form>
    <a href="logout.php">kilépés</a>
</body>
</html>