<?php
    $link = mysqli_connect("localhost", "root", "", "phpcrud");

    /* ha kell módosítani */
    $hiba = "";
    if(isset($_POST["modosit"])){
        $id = $_POST["id"];
        $nev = $_POST["nev"];
        /* ha az admin kódból adna jelszót: 
        $jsz = sha1($_POST["jsz"]);
        $sql = "UPDATE users SET name='$nev', password='$jsz', email='$email', status='$statusz' WHERE id='$id'";
        */
        $email = $_POST["email"];
        $statusz = $_POST["statusz"];
        $sql = "UPDATE users SET name='$nev', email='$email', status='$statusz' WHERE id='$id'";
        //echo $sql;
        $result = mysqli_query($link, $sql);
        header("location:tartalom.php");
        exit();
    }

    /* az eredeti adatok */
    $id = $_GET["modId"];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($link, $sql);
    $sor = mysqli_fetch_assoc($result);
    $nev = $sor["name"];
    /* a user jelszót az admin nem tudhatja! */
    //$jsz = $sor["password"];
    $email = $sor["email"];
    $statusz = $sor["status"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - módosít</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nev" id="nev" value="<?php echo $nev; ?>">
        <!-- az admin nem tud mit ide írni, majd az adatbázisban 
        adhat valamit
        <input type="text" name="jsz" id="jsz">
        -->
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <input type="text" name="statusz" id="statusz" value="<?php echo $statusz; ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" name="modosit" value="Módosít">
    </form>
</body>
</html>