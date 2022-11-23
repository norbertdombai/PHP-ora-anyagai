<?php
require_once("inc.php");
session_start();
define("adminPsw", "aaa");
if(isset($_POST["psw"])){
    if($_POST["psw"] === adminPsw){
        $_SESSION["admin"] = "login";
        header("Location:accounts.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login admin</title>
</head>
<body>
<form action="" method="POST">
        <p>
            <label for="psw">Jelszó:</label>
            <input type="password" name="psw" id="psw">
        </p>
        <p>
            <input type="submit" value="Belépés" name="name" id="name">
        </p>
    </form>
    <a href="logout.php">kilépés</a>
</body>
</html>