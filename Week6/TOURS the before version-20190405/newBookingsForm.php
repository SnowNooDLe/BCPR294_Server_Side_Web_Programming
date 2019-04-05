<?php
session_start();
require_once 'MyFunctions.php';
include_once "MYSQLDB.php";
include_once "db.php";

 
function isValidForm( $theCustomerNo, $theTourCodes, $theMonthNo ) 
{
	
	/*
   PART (b) OF QUESTION 2 GOES HERE

   This function will return "true" if (1) a customer has been selected,
                                       (2) at least 1 tour has been selected,
									   (3) a month has been selected
					 
   */

}


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	/*
	PART (a) OF QUESTION 2 GOES HERE
	
	
	Some code will be needed here to store the data that was recorded on the form in
	$theCustomerNo , $theTourCodes, $theMonthNo  
	*/
	// grab the variables from the form
    //var_dump( $_POST ); 
    $theCustomerNo = $_POST[ 'theCustomerNo' ];
	$theTourCodes = $_POST[ 'theTourCodes' ];//;[0];
	$theMonthNo = $_POST[ 'theMonthNo' ];
    //echo "<br> $theCustomerNo  $theTourCodes $theMonthNo <br>";
     
if ( isValidForm( $theCustomerNo, $theTourCodes, $theMonthNo ) == true )
{
	/*
	PART (c) OF QUESTION 2 GOES HERE

	Some code will be needed here to start registering session variables,
	store the contents of $theCustomerNo, $theTourCodes, $theMonth
	in session variables and to redirect to the addBookings.php script   
	*/

	// register the session variables and load the next page
  

  
  
}

}    
?>

<html>
<form action="newBookingsForm.php" method="post">

<?php
	echo '<b>New Bookings for a Customer </b><br><br><br>';
	echo '<b>Select a Customer From the list</b><br>';
	$theCustomers = getCustomers ($db) ;
	$outputLine = '<select name="theCustomerNo" size="6" >' ;
	echo $outputLine;
	while ( $aRow =  $theCustomers->fetch() )
    {
		$outputLine = "<option value='$aRow[customerNo]'>$aRow[firstname]". " $aRow[surname]</option>" ;
		echo $outputLine;
    }  
	echo '</select><br><br>' ;


	echo '<b>Select at least one Tour From the list</b><br>' ;
	$theTours = getTours($db) ;
	$outputLine = "<select multiple name='theTourCodes[]' size='5' >" ;
	echo $outputLine;
	while ( $aRow =  $theTours->fetch( ) )
    {
		$outputLine = "<option value='$aRow[tourCode]'>$aRow[tourName]</option>" ;
		echo $outputLine;
    }  
    echo '</select><br><br>';
	echo '<b>Select a Month</b><br>';
	echo '<select name="theMonthNo" size="1" >' ;
	$outputLine = "<option value='1'>January</option>" ;
	$outputLine .= "<option value='2'>February</option>" ;
	$outputLine .= "<option value='3'>March</option>" ;
	$outputLine .= "<option value='4'>April</option>" ;
	$outputLine .= "<option value='5'>May</option>" ;
	$outputLine .= "<option value='6'>June</option>" ;
	$outputLine .= "<option value='7'>July</option>" ;
	$outputLine .= "<option value='8'>August</option>" ;
	$outputLine .= "<option value='9'>September</option>" ;
	$outputLine .= "<option value='10'>October</option>" ;
	$outputLine .= "<option value='11'>November</option>" ;
	$outputLine .= "<option value='12'>December</option>" ;
	echo $outputLine;
	echo '</select>' ;

 ?>
<br><br> 

<input type='Submit' value='Record Bookings'>

</form>

<br /><br />

<a href="mainA.php">Return To Main Form</a>
</html>