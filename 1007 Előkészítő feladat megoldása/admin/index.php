<?php
require_once("inc.php");
session_start();

if(!check()){
    header("Location: login.php");
    exit();
}
?>