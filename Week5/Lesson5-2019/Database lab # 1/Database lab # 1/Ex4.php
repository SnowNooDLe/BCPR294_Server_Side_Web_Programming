<?php
require_once('MySQLDB.php');
$ex = "Ex4";
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
$sql = "Select * From item where quantOH < minQuant order by itemname";
$result = $db->query($sql);

// how big was that ?
echo $result->size();


echo '<h2>Items To Reorder</h2>';
echo '<table border=2>';
echo '<tr><td><b>Code</b></td><td><b>Name</b></td><td><b>Price</b></td><td><b>Quantity</b></td><td><b>Minimum</b></td></tr>';


while ( $row = $result->fetch() )
{
    $itemcode = $row['itemcode'];
    $itemname = $row['itemname'];
    $price = $row['price'];
    $quantity = $row['quantOH'];
    $minimum = $row['minQuant'];
    $output="<tr><td>$itemcode</td><td>$itemname</td><td>$price</td>";
    $output .= "<td>$quantity</td><td>$minimum</td></tr>";
    echo $output;
}

echo '</table><br><br><br>';
?>

<a href="main.php">Return To Main Form</a>