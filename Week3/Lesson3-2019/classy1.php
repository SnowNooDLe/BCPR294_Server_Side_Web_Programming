<?php
class horse 
{
   static $props = ['order'=>'mammal'];
}
$animal = new horse();
echo $animal::$props['order'];
echo '</br>';
// yields 'mammal'
// Alternate way:
// $animalClass = get_class($animal);
// echo $animalClass::$props['order'];
?>