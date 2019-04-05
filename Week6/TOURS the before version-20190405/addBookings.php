<?php
session_start();
include ("MyFunctions.php");
include "MYSQLDB.php";
include_once "db.php";

/*
   PART (d) OF QUESTION 2 GOES HERE

       write code here to load the session variables into $theCustomerNo, $theTourCodes and $theMonthNo
       then print them out to check that they have been successfully 
       passed through to this script.
   */



	//echo "<br> $theCustomerNo  $theTourCodes $theMonthNo <br>";
	//var_dump( $_SESSION );



   /*
   PART (e) OF QUESTION 2 GOES HERE

       write code here to insert the details of the new bookings that have been
       passed through to this script.
   */



session_destroy();

?>
<br><br>
<a href="mainA.php">Return to Main Menu</a>
</html>

