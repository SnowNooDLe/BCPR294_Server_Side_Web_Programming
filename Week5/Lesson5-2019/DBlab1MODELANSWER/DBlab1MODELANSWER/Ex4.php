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

//construct the SQL statement
$sql = "Select * From item where quantOH < minQuant order by itemname";
// execute the sql
$result = $db->query($sql);
$rows = $result->size();

 print "number of rows: $rows";

?>

<html>
<body>
<h2>Items To Reorder</h2>

<table border=2>
<tr><td><b>Code</b></td><td><b>Name</b></td><td><b>Price</b>
                                      </td><td><b>Quantity</b></td><td><b>Minimum</b></td></tr>

<?php
// the result is a table ie an array
// get each row of the table 

while ($myrow = $result->fetch())
    {
      // each row is an array  - pick out the values that you want
       $itemcode = $myrow['itemcode'];
       $itemname = $myrow['itemname'];
       $price= $myrow['price'];
       $quantity=$myrow['quantOH'];
       $minimum=$myrow['minQuant'];
       
       // if a variable is inside double quotes it will be replaced by its value
       $output="<tr><td>$itemcode</td><td>$itemname</td><td>$price</td>";
       $output .= "<td>$quantity</td><td>$minimum</td></tr>";
       print $output;
    } 
?>

</table>
<br /><br />

<a href="main.php">Return To Main Form</a>

</body>
</html>

