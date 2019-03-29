<?php
require_once('MySQLDB.php');
$ex = "Ex5";
echo "$ex<br><br>";

$host = 'localhost' ;
$dbUser = 'root';
$dbPass = '';
$dbName = 'freddy';


// create a new database object and connect to server
$db = new MySQL($host, $dbUser, $dbPass, $dbName);
  
// select the database
$db->selectDatabase();

    
//construct the SQL statement
$sql = "insert into item values ( '999','new item', 5.00, 5, 10 )";

echo '<h2>new item inserted!</h2><br><br><br>';

?>

<a href="main.php">Return To Main Form</a>
