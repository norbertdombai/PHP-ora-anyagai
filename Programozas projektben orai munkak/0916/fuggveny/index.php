<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php
        include("fv.inc.php");
        menu(0);

        echo "hol vagyok: " . basename($_SERVER["SCRIPT_NAME"]);
    ?>
    <h1>Index</h1>
</body>
</html>