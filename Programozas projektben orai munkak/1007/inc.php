<?php 
function htmlHeader($title, $menu = false){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
}
?>

<?php 
function htmlFooter(){
?>

</body>
</html>

<?php
}
?>

<?php 
function check(){
    if(isset($_SESSION["user"])){ return true;}
    else {return false;}
}
?>