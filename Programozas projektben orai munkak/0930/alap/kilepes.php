<?php
session_start();
//$_SESSION["belepve"] = false;
session_destroy();

header("location:index.php");
exit();
?>