<?php

class Phone
{
	protected $valueArray;
	protected $chars;
	// I know we learnt CASE 
	public function __construct($newChars)
	{
		$this->valueArray = array(
			'A' => 2,
			'B' => 2,
			'C' => 2,
			'D' => 3,
			'E' => 3,
			'F' => 3,
			'G' => 4,
			'H' => 4,
			'I' => 4,
			'J' => 5,
			'K' => 5,
			'L' => 5,
			'M' => 6,
			'N' => 6,
			'O' => 6,
			'P' => 7,
			'Q' => 7,
			'R' => 7,
			'S' => 7,
			'T' => 8,
			'U' => 8,
			'V' => 8,
			'W' => 9,
			'X' => 9,
			'Y' => 9,
			'Z' => 9
		);
		$this->chars = $newChars;
	}
	
	public function keyboard($query)
	{
		$arrayOfChar = str_split(strtoupper($this->chars));
		$numbers = '';
		
		foreach($arrayOfChar as $index => $value)
		{
			$numbers .= $this->valueArray[$value];
		}
		return  "the digits of " .$query ." are " .$numbers;
	}
}

$query = $_SERVER[ 'QUERY_STRING' ];
echo "***" . $query . '</p>';

if (isset($_SERVER[ 'QUERY_STRING' ]))
{
$aPhone = new Phone($query);
$giveTheDigit = $aPhone->keyboard($query);

	echo json_encode($giveTheDigit);
}
else
{
	echo json_encode('Something Wrong!!');
}

