<?php
// associative array
// key(position) 5 is integer 1, key(position) 12 is integer 2
$arr = array(5 => 1, 12 => 2);
var_dump($arr); //out: Array[2]
echo "<br>";
$arr[] = 56;
// will be better to use in debugging
var_dump($arr);
echo "<br>";
// printing human-readable array
print_r($arr);

$arr["x"] = 42;
echo "<br>";
print_r($arr);

$arr[] = 50;
echo "<br>";
print_r($arr);

// this removes the element from array
unset($arr[5]);
echo "<br>";
var_dump($arr);

// This deletes the whole array
// only use when you want to destory the certain array
unset($arr);
// Because its already dstroyed by unset($arr), printing NULL
var_dump($arr);
?>