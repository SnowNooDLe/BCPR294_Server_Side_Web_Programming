<?php
// include the database class for dealing with the database
require_once ("MySQLDB.php");

$myvar = "Ex7";
echo $myvar;
print "<br><br>";


$host = 'localhost' ;
$dbUser ='root';
$dbPass ='';
$dbName ='freddy';


// create a new database object and connect to server
$db = new MySQL($host , $dbUser , $dbPass , $dbName );

// select the database
$db->selectDatabase();

//construct the SQL statement
$sql = "Select sum(price) from item";
// execute the sql
$result = $db->query($sql);
//var_dump( $result->fetch()["sum(price)"]);
$totalValue = $result->fetch()["sum(price)"];
?>

<html>
<body>
<h2>Total value of all items</h2>
<?php
echo $totalValue . '<br><br>';
?>

<a href="main.php">Return To Main Form</a>

</body>
</html>

