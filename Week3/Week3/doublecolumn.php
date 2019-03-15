<?php
// Example 1
// class in PHP
class horse
{
    static $props = ['order' => 'mammal'];
}
// creating an instance of a class - a.k.a Object
$animal = new horse();
echo $animal :: $props['order'];
echo "<br>";
// alternative way
$animalClass = get_class($animal);
echo $animalClass :: $props['order'];
?>
