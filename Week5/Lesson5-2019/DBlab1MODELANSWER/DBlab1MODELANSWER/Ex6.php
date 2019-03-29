<?php
// include the database class for dealing with the database
require_once ("MySQLDB.php");

$myvar = "EX6";
echo $myvar;
print "<br><br>" ;


$host = 'localhost' ;
$dbUser ='root';
$dbPass ='';
$dbName ='freddy';


// create a new database object and connect to server
$db = new MySQL( $host, $dbUser, $dbPass, $dbName );
// select the database
$db->selectDatabase();
//construct the SQL statement
$sql = "Select price from item";
// execute the sql
$result = $db->query($sql);
$rows = $result->size();
//print "number of rows:  $rows";

?>

<html>
<body>
<h2>Total Value of all items</h2>

<?php
// the result is a table ie an array
// get each row of the table 
$totalValue = 0;
$price = 0.0;

while ($myrow = $result->fetch())
{
	$price = $myrow['price'];
	
	//echo  $price  . '<br>';

	var_dump($price);
	$totalValue += $price;
		
} 

echo $totalValue . '<br>';
?>


<br><br>

<a href="main.php">Return To Main Form</a>

</body>
</html>



