<?php
// include the database class for dealing with the database
require_once ("MySQLDB.php");

    $myvar = "Hello World";
    echo $myvar;
    print "<br><br>" ;

  
   $host = 'localhost' ;
   $dbUser ='root';
    $dbPass ='';
    $dbName ='freddy';


       // create a new database object and connect to server
   $db = new MySQL($host , $dbUser , $dbPass , $dbName );
  
 // select the database
$db->selectDatabase();

$sql="insert into item values ('999','new item',5.00,5,10) ";
$result = $db->query($sql);
?>

<html>
<body>


<h2>new item inserted!</h2>

<br /><br />

<a href="main.php">Return To Main Form</a>

</body>
</html>
