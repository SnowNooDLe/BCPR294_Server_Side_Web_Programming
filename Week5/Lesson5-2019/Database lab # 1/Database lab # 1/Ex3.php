<?php
require_once('MySQLDB.php');
$ex = "E3";
echo "$ex<br><br>";

$host = 'localhost' ;
$dbUser = 'root';
$dbPass = '';
$dbName = 'freddy';


// create a new database object and connect to server
$db = new MySQL($host, $dbUser, $dbPass, $dbName );
  
// select the database
$db->selectDatabase();
    
//construct the SQL statement
$sql = "Select *, quantOH*price as itemValue From item order by price desc";
$result = $db->query($sql);


// how big was that ?
echo $result->size();


echo  '<h2>Items With All Fields Showing</h2>';
echo '<table border=2>';
echo '<tr><td>Code</td><td>Name</td><td>Price</td><td>Quantity</td><td>Minimum</td><td>Item Value</td></tr>';

while ( $row = $result->fetch() )
{

    $itemcode = $row['itemcode'];
    $itemname = $row['itemname'];
    $price = $row['price'];
    $quantity = $row['quantOH'];
    $minimum = $row['minQuant'];
    $itemValue = $price * $quantity;
    $output = "<tr><td>$itemcode</td><td>$itemname</td><td>$price</td>";
    $output .= "<td>$quantity</td><td>$minimum</td><td>$itemValue</td></tr>";
    echo $output;
} 

echo '</table><br><br><br>';
?>

<a href="main.php">Return To Main Form</a>