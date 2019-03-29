<?php
require_once('MySQLDB.php');
$ex = "Ex2";
echo "$ex<br><br>";


$host = 'localhost' ;
$dbUser ='root';
$dbPass ='';
$dbName ='freddy';

// create a new database object and connect to server
$db = new MySQL($host, $dbUser, $dbPass, $dbName );
  
// select the database
$db->selectDatabase();
    
//construct the SQL statement
$sql = 'Select * from item order by price desc';
$result = $db->query($sql);

// how big was that ?
echo $result->size();


echo '<h2>Items Sorted By Price</h2>';
echo '<table border=2>';
echo '<tr><td>Code</td><td>Name</td><td>Price</td></tr>';


while ( $row = $result->fetch() )
{
    //var_dump($row);
    // each row is an array  - pick out the values that you want
    $itemcode = $row['itemcode'];
    $itemname = $row['itemname'];
    $price = $row['price'];

    echo "<tr><td>$itemcode</td><td>$itemname</td><td>$price</td></tr>" ;
}

echo '</table><br><br><br>';
?>
<a href="main.php">Return To Main Form</a>
