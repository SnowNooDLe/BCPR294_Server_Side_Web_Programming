<html>
<body>
<?php
require_once 'MySQLDB.php' ;
include "months.php";
include_once "MyFunctions.php";
include_once "db.php";

 
//---- Display The Tour Table
$tours = getTours($db);
echo '<h2>Tours</h2>';
echo $tours->size() . ' rows returned<br>';
echo ("<table border=1><tr><td>tour Code</td><td>Tour Name</td><td>Introduction</td></tr>") ;
while ( $aRow = $tours->fetch( ) )
{
	$outputLine = "<tr><td>$aRow[tourCode]</td>";
	$outputLine .= "<td>$aRow[tourName]</td>";
	$outputLine .= "<td>$aRow[introduction]</td></tr>";
	echo $outputLine;
}
echo '</table>';




//---- Display The Customer Table
echo ( "<h2>Customers</h2>") ;
$customers=getCustomers($db); 
echo $customers->size() . ' rows returned<br>';
echo "<table border=1><tr><td>Customer Number</td><td>Customer Name</td></tr>";
while ( $aRow = $customers->fetch( ) )
{
	$outputLine = "<tr><td>$aRow[customerNo]</td>";
	$outputLine .= "<td>$aRow[firstname]";
	$outputLine .= " $aRow[surname]</td></tr>";
	echo $outputLine;
}
echo '</table>';




//---- Display The Booking Table
echo '<h2>Bookings</h2>';
$bookings = getBookings($db);
echo $bookings->size() . ' rows returned<br>';
echo ("<table border=1><tr><td>Booking Number</td><td>Tour Code</td><td>Month</td><td>Customer Number</td><td>Deposit</td></tr>") ;
while ( $aRow = $bookings->fetch() )
{
	$outputLine = "<tr><td>$aRow[bookingNo]</td>";
	$outputLine .= "<td>$aRow[tourCode]</td>";
	$monthNo = $aRow['month'];
	$outputLine .= "<td>$months[$monthNo]</td>";
	$outputLine .= "<td>$aRow[customerNo]</td>";
	$outputLine .= "<td>$aRow[deposit]"."&nbsp;</td></tr>";
	echo $outputLine;
}
echo '</table>';
?>

<br><br>