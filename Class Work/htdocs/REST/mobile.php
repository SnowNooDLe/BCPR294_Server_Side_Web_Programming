<?php
//Returns the query string if the page is accessed via a query string
//https://www.w3schools.com/php/php_superglobals.asp

$query = 'blank';
if (  isset( $_SERVER[ 'QUERY_STRING' ] ))  
{
	$query = $_SERVER[ 'QUERY_STRING' ];
	if (! empty($query))  
	{
		$query = $_SERVER[ 'QUERY_STRING' ];
	}
	else 
	{
		$query = 'blank';
	}
}
$mobiles = array(
		1 => 'Apple iPhone 6S',  
		2 => 'Samsung Galaxy S6',  
		3 => 'Apple iPhone 6S Plus',  			
		4 => 'LG G4',  			
		5 => 'Samsung Galaxy S6 edge',  
		6 => 'OnePlus 2');
$answer = 'Not found';
if (array_key_exists( $query, $mobiles ))
{
	$answer =  $mobiles[ $query ];
}
header( 'Content-Type: application/json' );
echo json_encode($answer);

//echo $_SERVER[ 'QUERY_STRING' ];
