<?php
  include( 'MyFunctions.php' );
  
function isValidForm( $theWords  ) 
{
	$result = true;

	if ( $theWords == ""  )
	{
	   $result = false;
	   echo 'Please enter a word or words for your search<br>';
	}

	return $result;

}


if( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
	// grab the variables from the form
    $theWords = $_POST[ 'theWords' ];
       
	//echo "<br>$theWords<br>';
	
	if ( isValidForm ( $theWords )  )
    {
		// specify where to save the session variables
		session_save_path("./");
		session_start();
		// register the session variables and load the next page
		$_SESSION[ 'theWords'] = $theWords;
		header( 'Location: searchTours.php' ) ;
    }
}    
?>

<html>
<form action="newSearchToursForm.php" method="post">

<b>Search Tours </b><br><br> 
Enter a word or words to search for<br /><br />

<input name ='theWords' type='text' size='100' >

<br /><br /> 

<input type='Submit' value='Search'>

</form>

<br /><br />
<a href="mainB.php">Return To Main Form</a>
</html>
