<?php 
function check(){
    if(isset($_SESSION["admin"])){ return true;}
    else {return false;}
}
?>