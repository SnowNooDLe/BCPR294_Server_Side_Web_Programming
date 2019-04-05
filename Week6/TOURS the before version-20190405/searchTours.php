<?php
include_once ("MyFunctions.php");
include_once "MYSQLDB.php";
include_once "db.php";

// specify where to locate the session data
session_save_path("./");
session_start();

// retrieve the saved session data
$theWords = $_SESSION["theWords"] ;
         
/*
   PART (c) OF QUESTION 4 GOES HERE
                                 
*/

// check that you have got the data OK
	
// echo "<br>The words to search for: $theWords<br><br>";







	
// delete the session data
@session_destroy() ;

?>

<html>
<br><br>
<a href="mainB.php">Return To Main Form</a>
</html>