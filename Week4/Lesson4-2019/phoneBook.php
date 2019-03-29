<?php

function convert ( $number) 
{
	$number = strtoupper($number);
	$result = '';
	$number = str_split( $number );
	foreach ( $number as $char )
	{
		//echo strpos( "ABC", $char) ;
		if ( strpos( "ABC", $char ) !== false )
		{
			$result .= "2";
		}
		
		if ( strpos("DEF", $char ) !== false )
		{
			$result .= "3";
		}
		if ( strpos("GHI", $char ) !== false )
		{
			$result .= "4";
		}
		if ( strpos("JKL", $char ) !== false )
		{
			$result .= "5";
		}
		if ( strpos("MNO", $char ) !== false )
		{
			$result .= "6";
		}
		if ( strpos( "PQRS", $char ) !== false )
		{
			$result .= "7";
		}
		if ( strpos( "TUV", $char ) !== false )
		{
			$result .= "8";
		}
		
		if ( strpos($char, "TUV" ) !== false )
		{
			$result .= "8";
		}
		if ( strpos( "WXYZ", $char ) !== false )
		{
			$result .= "9";
		}
		
	}
	
	return $result;
	
}
	$query = "";
	$answer = '';
	if (isset( $_POST[ 'phoneword' ]  ) )
	{
			$query = $_POST[ 'phoneword' ];

			$answer = convert( $query ) ;
	}
?>
<form action="question4.php" method="POST" >
<label>Enter the word</label>
<input type="phoneword" name="phoneword" size="50"/>
<input type="submit" value="SUBMIT" />
<br>
<?php echo $answer ; ?>
</form>
