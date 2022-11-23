<?php
$hiba = "";
if(isset($_POST["mehet"])){
    $nev = $_POST["nev"];
    $jsz = sha1($_POST["jsz"]);
    $link = mysqli_connect("localhost", "root", "", "phpcrud");
    $sql = "SELECT * FROM users WHERE name='$nev' AND password='$jsz'";
    /* nem szép, néha nem is működik a DOCTYPE előtt kiíratni! */
    //echo $sql;
    $result = mysqli_query($link, $sql);
    if(mysqli_num_rows($result) == 1){
        header("location:tartalom.php");
        exit();
    }else{
        $hiba = "<p class='hiba'>Nem jó adatok!</p>";
    }
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Belépés</title>
</head>
<body>
    <?php 
        //echo "DEBUG:<br>";
        //echo $sql;

        echo $hiba;
    ?>
    <form action="" method="POST">
        <input type="text" name="nev" id="nev">
        <input type="password" name="jsz" id="jsz">
        <input type="submit" name="mehet" value="Belépés">
    </form>
</body>
</html>