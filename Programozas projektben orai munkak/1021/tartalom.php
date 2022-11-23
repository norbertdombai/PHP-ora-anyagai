<?php
    $link = mysqli_connect("localhost", "root", "", "phpcrud");

    /* ha kell, akkor megyünk a módosító oldalra */
    if(isset($_GET["modId"])){
        $id = $_GET["modId"];
        header("location:modosit.php?modId=$id");
        exit();
    }

    /* ha kell, akkor törlünk */
    if(isset($_GET["delId"])){
        $id = $_GET["delId"];
        $sql = "DELETE FROM users WHERE id=$id";
        $result = mysqli_query($link, $sql);
    }

    /* a friss adatbázist lekérdezzük: _fetch_row VAGY _fetch_assoc */
    //                 0     1       2
    //$sql = "SELECT name, email, password FROM users";
    //while ($sor = mysqli_fetch_row($result)){
        //$nev = $sor[0];
        //$email = $sor[1];
        //$jsz = $sor[2];
    //}
    $sql = "SELECT * FROM users";
    $result = mysqli_query($link, $sql);
    $tablaSorok = "";
    while ($sor = mysqli_fetch_assoc($result)){
        $id = $sor["id"];//AB tábla mező neve
        $nev = $sor["name"];//AB tábla mező neve
        $email = $sor["email"];//AB tábla mező neve
        $jsz = $sor["password"];//AB tábla mező neve
        $statusz = $sor["status"];//AB tábla mező neve
        $tablaSorok .= "<tr>";
        $tablaSorok .= "<td>$id</td>";
        $tablaSorok .= "<td>$nev</td>";
        $tablaSorok .= "<td>$email</td>";
        $tablaSorok .= "<td>$jsz</td>";
        $tablaSorok .= "<td>$statusz</td>";
        $id = $sor["id"];//AB tábla mező neve
        $torol = "<a href=?delId=$id>töröl</a>";
        $modosit = "<a href=?modId=$id>módosít</a>";
        $tablaSorok .= "<td>$torol | $modosit</td>";
        $tablaSorok .= "</tr>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - tartalom</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>NÉV</th>
            <th>E-MAIL</th>
            <th>JELSZÓ</th>
            <th>STÁTUSZ</th>
            <th>MŰVELETEK</th>
        </tr>
        <?php echo $tablaSorok; ?>
    </table>
</body>
</html>