<?php
$data = array('cats'=>'evil', 'dogs'=>'dumb', 'birds'=>'flighty');
header('Content-Type: application/json');
echo json_encode ($data);
echo "\n";
var_dump($data);
// some more
// echo $_SERVER['SERVER_NAME'];
?>