<?php
$ex = "Ex7";
echo "$ex<br><br>";

$host = 'localhost' ;
$dbUser = 'root';
$dbPass = '';
$dbName = 'freddy';


// create a new database object and connect to server

  
// select the database

    
//construct the SQL statement
$sql = 'select sum( price * quantOH) as "total" from item';


$totalValue = 0;
echo '<h2>Total Value of all items</h2>';
echo  '$' . number_format($totalValue, 2);
echo '<br><br><br>';  

?>

<a href="main.php">Return To Main Form</a>

</body>
</html>

