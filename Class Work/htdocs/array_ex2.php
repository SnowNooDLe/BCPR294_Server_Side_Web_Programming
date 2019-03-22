<?php
    $cars = array("BMW", "Audi", "Mercedes-Benz");

    echo "I like " . $cars[0]. ", " .$cars[1]. ", ". $cars[2]. ".";
    $arrlength = count($cars);

    echo "<br>";
    echo "There are " .$arrlength. " cars";
    echo "<br>";

    // $x defines for position
    // $x_value defines for value of that position
    foreach($cars as $x => $x_value){
        echo "key = " .$x. ", value = ".$x_value;
        echo "<br>";
    }
?>