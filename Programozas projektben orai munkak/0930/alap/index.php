<?php
session_start();
/* bejelentkezés után, ha ide kerülünk, ki is léptettük! */
//$_SESSION["belepve"] = false;
if(!isset($_SESSION["belepve"]) || $_SESSION["belepve"] != true){
    header("location:bejelentkezes.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php 
    if($_SESSION["belepve"] != true){
        echo "<h1>Bejelentkezés szükséges!</h1>";
    }else{
        echo '<p><a href="tartalom.php">tovább a tartalomhoz</a></p>';
    }
    ?>
</body>
</html>