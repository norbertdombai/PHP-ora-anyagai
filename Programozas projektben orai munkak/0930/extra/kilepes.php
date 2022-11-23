<?php
session_start();
//$_SESSION["belepve"] = false;
//session_destroy();

$_SESSION["belepve"] = false;
$fhn = $_SESSION["nev"];

header("location:bejelentkezes.php?fhn=$fhn");
exit();
?>