<?php
header( 'Content-Type: application/json' );
class Reversed 
{
	public $letters;
	protected $reverseStr;
	public function __construct($newLetter) 
	{
		$this->letters = $newLetter;
	}	
	public function convert()
	{

		$size = strlen($this->letters);         
		for ($i = ($size - 1); $i >= 0; $i --)
		{

			$this->reverseStr .= $this->letters[$i];
		}

	}

	public function getRevStr() 
	{
		if ( isset( $this->reverseStr ) ) 
		{
			return $this->reverseStr;
		}
	}
}

if (isset($_SERVER['QUERY_STRING'])) 
{
	$input = $_SERVER['QUERY_STRING'];
	$reversed = new Reversed($input);	
	$reversed->convert();
	$answer = $reversed->getRevStr();
	$result = [$input, $answer];
	echo json_encode($result);	
}
