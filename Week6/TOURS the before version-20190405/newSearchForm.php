<?php
include ("MyFunctions.php");
include_once "months.php";
include_once "MYSQLDB.php";
include_once "db.php";

function isValidForm( $theTourCode, $theSurname ) 
{
	$result = true;

	if ( $theTourCode == "" AND $theSurname =="" )
	{
		$result = false;
		echo 'Please select a tour or enter a surname';
	}
	return $result;

}


if( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{

	// grab the variables from the form
	$theTourCode = $_POST["theTourCode"];
	$theSurname = $_POST["theSurname"];
	//echo "<br>$theTourCode<br>";
	//echo "<br>$theSurname<br>"";


	if ( isValidForm( $theTourCode, $theSurname ) == true )
    {
		// specify where to save the session variables
		session_save_path("./");
		session_start();
		// register the session variables and load the next page
		$_SESSION[ 'theTourCode' ] = $theTourCode ;
		$_SESSION[ 'theSurname' ] = $theSurname ;
		header( 'Location: search.php' ) ;
    }
}    
?>

<html>
<form action="newSearchForm.php" method="post">

<?php
echo "<b>Search for Bookings</b><br><br>" ;   
echo "Select a tour and/or enter a surname or the first part of a surname<br><br>";

echo "<b>Select a Tour From the list</b><br>" ;
$theTours = getTours($db) ;

$outputLine = '<select name="theTourCode" size="5">' ;
echo $outputLine;
while ( $aRow =  $theTours->fetch( ) )
{
	$outputLine = "<option value='$aRow[tourCode]'>$aRow[tourName]</option>";
	echo $outputLine;
}  
?>   
</select>
<br /><br />
<b>Enter a Customer Surname</b>
<input name='theSurname' type='string' size='15'>
<br /><br /> 

<input type='Submit' value='Search'>
</form>
<br /><br />

<a href="mainB.php">Return To Main Form</a>
</html>
