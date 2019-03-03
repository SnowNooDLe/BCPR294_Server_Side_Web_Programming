<?php
$x = 5; // global scope

function myTest() 
{
    // using x inside this function will generate an error
	//$x = 42;
	global $x;
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";

/*
function doStaticStuff () 
{
	static $z = 1;
	echo "<p>the z vaule is $z </p>";
	$z++;
}
doStaticStuff();
doStaticStuff();
doStaticStuff();
doStaticStuff();
*/


/*
//variable variables!
$a = 'hello';
echo "<p>$a</p>";

$$a = 'world';
echo "<p>$a ${$a}</p>";
echo "<p>$a $hello</p>";
*/

/*
//the Right Way to do CONSTANTS
const MOL = 42;
echo '<p>the meaning of life is ' . MOL . '</p>';
*/

?>