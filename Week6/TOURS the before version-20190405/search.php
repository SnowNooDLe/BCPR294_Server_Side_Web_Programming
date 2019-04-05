<?php
include ("MyFunctions.php");
include_once "months.php";
include_once "MYSQLDB.php";
include_once "db.php";

// specify where to locate the session data
session_save_path("./");
session_start();


// retrieve the saved session data
$theTourCode = $_SESSION["theTourCode"] ;
$theSurname = $_SESSION["theSurname"] ;
 

/*
PART (b) OF QUESTION 3 GOES HERE
use your getBookings2 function to complete the coding of this script.
*/










// delete the session data
session_destroy() ;

?>

<html>
<br /><br />
<a href="mainB.php">Return To Main Form</a>
</html>
