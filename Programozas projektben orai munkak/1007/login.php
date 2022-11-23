<?php
$input = false;
require_once('inc.php');
session_start();
$fn = "admin/protected/users.txt";
if(is_readable($fn)){
    $input = true;
}

if(isset($_POST["name"])){
    $name = $_POST["name"];
    $psw = $_POST["psw"];
    $usersRow = file($fn);

    /* ide kerülnek a beolvasott sorok fhn:jsz formában */
    /*echo"<pre>";
    print_r($usersRow);
    echo"</pre>";*/

    $namePsw = array();
    foreach ($usersRow as $raw) {
        list($n,$p) = explode(":", rtrim($raw));
        $namePsw[$n] = $p;
    }

    /* itt van az asszociatív tömb, [fhn] = jsz formában */
    /*echo"<pre>";
    print_r($namePsw);
    echo"</pre>";*/

    foreach ($namePsw as $nn => $pp) {
        if($name == $nn && $psw == $pp){
            $_SESSION["user"] = $name;
            header("Location:logWrite.php");
            exit();
        }
    }

    /*list($n,$p) = explode(":", rtrim($users[0]));
    if($name == $n && $psw == $p){
        $_SESSION["user"] = $name;
        header("Location:logWrite.php");
        exit();
    }*/
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login user</title>
</head>
<body>
    <?php if($input) : ?>
    <h1>User bejelentkezés</h1>
    <form action="" method="POST">
        <p>
            <label for="name">Név:</label>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="psw">Jelszó:</label>
            <input type="password" name="psw" id="psw">
        </p>
        <p>
            <input type="submit" value="Belépés" name="belep" id="belep">
        </p>
    </form>
    <?php else : ?>
        <h1>Nem lehet bejelentkezni!</h1>
    <?php endif; ?>
    <a href="logout.php">kilépés</a>
</body>
</html>