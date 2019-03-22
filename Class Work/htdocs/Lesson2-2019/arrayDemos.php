<?php

$colors = array( 'a' => 'Red', 'b' => 'Green' );
var_dump($colors);
echo '<br>';
echo $colors['a'];
$colors['a'] = 'BLUE';
echo '<br>';
echo $colors['a'];

$numbers = array(11,22,33,44,55);
echo '<br>';
var_dump($numbers);
echo '<br>';
echo $numbers[1];
echo '<br>';
print_r($numbers);
$letters = ['a', 'b', 'c'];
echo '<br>';
var_dump($letters);
$numbers2 = array(1 => 666, 'm' => 444);
$numbers2[] = 111;
$numbers2[] = 222;
$numbers2[99] = 222;
$numbers2[] = 333;
echo '<br>';
var_dump($numbers2);

foreach($colors as $index => $value) 
{
	echo "<br> $index is $value";
}
foreach($colors as $value) 
{
	echo "<br> $value";
}
$count = count($numbers2);
for ( $i = 0; $i < $count; $i ++ ) 
{
	echo $numbers2[$i] . '<br>';
}





































