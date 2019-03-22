<?php
#Associative Array
//Note the Plural names
$colours = array('a' => 'Red', 'b' => 'Blue', 'w' => 'White');
/* How to iterate/looping through an Array 
	to see indexes and values
*/
foreach ($colours as $index => $colour){
	echo "$index = $colour </br>";	
}
// Sequential Initialization
$digits = array(1,2,3,4,5,6,7,8,9);
// 2 ways to display
var_dump($digits);
echo '</br>';
print_r($digits);
echo '</br>';
# No Explicit array
$letters = ['a','b','c'];
var_dump($letters);
echo '</br>';
print_r($letters);
echo '</br>';

// iterate just the values
foreach ($letters as $letter) {
	echo $letter .'</br>';
}
echo '</br>';

// Counted Loop
 $count = count($letters);
for ($i = 0; $i < $count; $i ++){
	echo $letters[$i];
	echo '</br>';
}

#build and Extend
$primes = array(); // empty
// Keyed extend
$primes[] = 2;
$primes[] = 3;
$primes[] = 5;

var_dump($primes);
echo '</br>';

// Keyed extend
$primes['first'] = 2;
$primes['second'] = 3;
$primes['third'] = 5;

var_dump($primes);








