<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infó</title>
</head>
<body>
    <?php
        include("fv.inc.php");
        menu(1);

        echo "hol vagyok: " . basename($_SERVER["SCRIPT_NAME"]);
    ?>
    <h1>Infó</h1>
</body>
</html>