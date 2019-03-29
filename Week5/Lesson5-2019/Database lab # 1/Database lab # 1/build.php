<?php
require_once('MySQLDB.php');

$ex = "building tasks";
echo "$ex<br><br>";

$host = 'localhost' ;
$dbUser = 'root';
$dbPass = '';
$dbName = 'freddy';


// create a new database object and connect to server
$db = new MySQL($host, $dbUser, $dbPass, $dbName);
$db->createDatabase();

// select the database
$db->selectDatabase();
     
// drop table // execute the sql
$sql = 'drop table if exists item';
//$result = 
$db->query($sql);
//var_dump($result);


// create table
$sql = "create table item (itemcode  integer not null,
    itemname char(20),
    price decimal(10,2),
    quantOH  integer,
    minQuant integer,
    primary key(itemcode) )";
//$result = 
$db->query($sql);
//var_dump($result);



// insert some rows
$sql = "insert into item values (101, 'Red Hat', 12.50, 17, 10)";
$db->query($sql);

$sql = "insert into item values (102, 'Bike', 195.00, 7, 5)";
$db->query($sql);

$sql = "insert into item values (103, 'Blue Hat', 12.50, 4, 10)";
$db->query($sql);

$sql = "insert into item values (104, 'Silly Hat', 12.50, 3, 10)";
$db->query($sql);
     
$sql = "insert into item values (105, 'White Hat', 19.50, 12, 10)";
$db->query($sql);

$sql = "insert into item values (106, 'ASSICS Running shoes', 219.50, 20, 5)";
$db->query($sql);

?>
<html>
<body>

<br><br>

<a href="main.php">Return To Main Form</a>

</body>
</html>
