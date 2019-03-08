<?php
    $a = array( 'color' => 'red',
                'taste' => 'sweet',
                'shape' => 'round',
                'name' => 'apple',
                4
);

var_dump($a);
echo "<br>";
$colors = array('red', 'blue', 'orange', 'yellow');

foreach($colors as $color){
    // \n is not working
    echo "Do you like $color? <br>";
}

print_r($colors);

echo "<br>";
$firstquarter = array(1 => 'January', 'February', 'March');
print_r($firstquarter);
?>