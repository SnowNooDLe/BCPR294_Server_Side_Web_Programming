<?php
//https://www.w3schools.com/php/php_superglobals.asp
$data = array( 'cats' => 'evil', 'dogs' => 'dumb', 'birds' =>
'flighty' );
header( 'Content-Type: application/json' );
echo json_encode( $data ) ;
echo '</br>';
var_dump($data);
echo '</br>';
echo $_SERVER['SERVER_NAME'];


