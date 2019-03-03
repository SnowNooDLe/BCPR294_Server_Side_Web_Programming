<?php
$colors = array ("a" => "Red", "b" => "Blue", "b" => "Brown");

foreach ( $colors  as  $index => $color )
{
	echo "$index is $color <br>";
}

var_dump($colors);

echo '<br><br>';
$digits = array(1,2,3,4,5,6,7,8,9);
var_dump($digits);
echo '<br><br>';
print_r($digits);
echo '<br><br>';

foreach ( $digits as $digit)
{
	echo "$digit <br>";
}


$numbers = array();
$numbers[42] = 11;
$numbers[666] = 22;
$numbers[999] = 33;
$numbers[23] = 44;
$numbers[] = 55;
var_dump($numbers);
echo '<br><br>';
print_r($numbers);
echo '<br><br>';
foreach ( $numbers as $number)
{
	echo "$number <br>";
}

$primes = array();
$primes['first'] = 2;
$primes['second'] = 3;
$primes[] = 5;

foreach ( $primes as $index => $prime)
{
	echo "$index   $prime <br>";
}


























