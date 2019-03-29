<?php
$ex = "Ex6";
echo "$ex<br><br>";

$host = 'localhost' ;
$dbUser = 'root';
$dbPass = '';
$dbName = 'freddy';


// create a new database object and connect to server

  
// select the database

    
//construct the SQL statement
$sql = "Select * From item";


echo '<h2>Total Value of all items</h2>';

$totalValue = 0;
// use a loop and add stuff up

echo  '$' . number_format($totalValue, 2);
echo '<br><br><br>';
?>
<a href="main.php">Return To Main Form</a>
