<?php
function menu($inaktiv){
    $menuFajlNev = array("index", "info", "partner");
    $menuKlikkSzoveg = array("kezdő", "rólunk", "partnereink");
    $link = "";
    foreach ($menuFajlNev as $key => $value) {
        if($inaktiv != $key){
            $link .= "\n<a href = ";
            $link .= "'" . $value . ".php'";
            $klikkSzoveg = $menuKlikkSzoveg[$key];
            $link .= ">$klikkSzoveg</a>\n";
        }else{
            $link .= "\n" . $menuKlikkSzoveg[$key] . "\n";
        }
    }
    echo $link;
}

//nem mindig zárják le, ha csak php kód, azaz php blokk van a fájlban