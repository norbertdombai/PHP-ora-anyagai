<?php
    session_start();

    /* esetleg lehet vizsgálni, ha be van lépve
    * akkor tovább küldjük...
    */

    $fhn = "";
    if(!empty($_SERVER["QUERY_STRING"])){
        //echo"<pre>";
        //print_r($_GET);
        //echo"</pre>";
        if(isset($_GET["fhn"])){
            $fhn = $_GET["fhn"];
        }
    }

    $joFhn = "a";//AB-ból kellene...
    $joJsz = "a";//AB-ból kellene...

    //ha volt submit, akkor kerültek kulcsok a $_POST tömbbe
    if(isset($_POST["mehet"])){
        $beFhn = $_POST["fhn"];//amit beírt a user
        $beJsz = $_POST["jsz"];//amit beírt a user
        if($beFhn == $joFhn && $beJsz == $joJsz){
            $_SESSION["belepve"] = true;
            $_SESSION["nev"] = $beFhn;
            header("location:tartalom.php");
            exit();
        }else{
            $_SESSION["belepve"] = false;
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bejelentkezés</title>
</head>
<body>
    <form action="" method="post">
        <p>
            <label for="fhn">fhn:</label>
            <input type="text" name="fhn" id="fhn" value="<?php echo $fhn; ?>">
        </p>
        <p>
            <label for="jsz">jsz:</label>
            <input type="password" name="jsz" id="jsz">
        </p>
        <p>
            <input type="submit" value="mehet" name="mehet">
        </p>
    </form>
</body>
</html>