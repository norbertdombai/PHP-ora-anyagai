<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autók 1 tömbben</title>
    <link rel="stylesheet" href="stilus.css">
</head>
<body>
    <h1>Autók 1 tömbben</h1>
    <?php
        $auto1Tomb = array("szin" => "piros", "marka" => "BMW");
        $auto2Tomb = array("szin" => "kék", "marka" => "VW");
        $auto3Tomb = array("szin" => "sárga", "marka" => "Suzuki");

        $autokTomb = array(
            "ABC-123" => $auto1Tomb, 
            "QWE-123" => $auto2Tomb,
            "ASD-123" => $auto3Tomb
        );

        //ez csak debug módban, a fejlesztés során használható
        echo"<pre>";
        print_r($autokTomb);
        echo"</pre>";
    ?>
    <h1>Autók táblázatban</h1>
    <table>
        <tr>
            <th>RSZ.</th><th>SZÍN</th><th>MÁRKA</th>
        </tr>
        <!--
        <tr>
            <td>ABC-123</td><td>BMW</td><td>piros</td>
        </tr>
        -->
        <?php
            foreach ($autokTomb as $rsz => $tomb) {
                $sor = "\n<tr>";
                $sor .= "<td>$rsz</td>";
                foreach ($tomb as $value) {//nem kell a kulcs, ami: szin és a marka
                    $sor .= "\n\t<td>$value</td>";
                }
                $sor .= "\n</tr>";
                echo $sor . "\n";
            }  
        ?>
    </table>
</body>
</html>