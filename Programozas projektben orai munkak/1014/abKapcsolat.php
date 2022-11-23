<?php
$ab_kiszolgalo = "127.0.0.1";//"localhost" vagy ip is lehetne
$ab_fhnev = "root";
$ab_jsz = "";
$ab_neve = "elso_ab";
$link = mysqli_connect($ab_kiszolgalo, $ab_fhnev, $ab_jsz, $ab_neve);

$result = mysqli_query($link, "SELECT * FROM nevek");
printf("Select returned %d rows.\n", mysqli_num_rows($result));
/* a result nem kiírható, külön típusként kell kezelni */
//echo "<p>lekérdezés eredménye: " . $result . "</p>";

/* a result típus bejárható a mysqli_fetch_ kezdetű parancsokkal: */
/*while ($row = mysqli_fetch_row($result)) {
    printf("<p>%s %s</p>\n", $row[0], $row[1]);
}*/

echo "<p>másként:</p>";

while ($row = mysqli_fetch_assoc($result)) {
    printf("<p>%s %s</p>\n", $row["id"], $row["nev"]);
}

mysqli_free_result($result);
?>