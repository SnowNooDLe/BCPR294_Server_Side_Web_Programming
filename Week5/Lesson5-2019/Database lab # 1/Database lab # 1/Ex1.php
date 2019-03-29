<?php
require_once('MySQLDB.php');
$myvar = "Ex1=";
echo "$myvar <br><br>" ;

$host = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'freddy';

// create a new database object and connect to server
$db = new MySQL($host, $dbUser, $dbPass, $dbName ); 


// Check connection
// select the database
$db->selectDatabase();

//get all the data for items
$sql = "Select * From item order by itemname";
$result = $db->query($sql);
//var_dump($result);
// how big was that ?
echo $result->size();

// what was it?
//var_dump( $result->fetch());




// the result is a table ie an array
// get each row of the table 
echo '<h2>Items Sorted By Item Name</h2>';
echo '<table border=2>';
echo '<tr><td>Code</td><td>Name</td><td>Price</td></tr>';

while ( $row = $result->fetch() )
{
  // each row is an associative array  - pick out the values that you want
   $itemcode = $row['itemcode'];
   $itemname = $row['itemname'];
   $price = $row['price'];

   
   echo "<tr><td>$itemcode</td><td>$itemname</td><td>$price</td></tr>" ;
}

echo '</table><br><br>'
?>

<a href="main.php">Return To Main Form</a>



