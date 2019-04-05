<?php 
// It's Broken :-( Fix it Please!!
echo "It's Broken :-( Fix it Please!! </p>";
$query = $_SERVER[ 'QUERY_STRING' ];
class Palindrome
{
	protected $forwards;
	
	public function __construct($newForwards)
	{
		$this->forwards = $newForwards;
		$this->backwards = '';
	}
	
	public function checkPalindrome()
	{
		$answer = 'This is not a Palindrome';
		$len = strlen($this->forwards);
		
		for($n = $len - 1; $n >= 0; $n--)
		{	
			$this->backwards .= $this->forwards[$n];
		
		}
		
		if ($this->backwards = $this->forwards)
		{
			$answer = preg_replace( '/\s+/', '', $this->forwards) . " is a Palindrome";
		}
		
		return $answer;
	}
}
$aPalin = new Palindrome($query);
$showThePalin = $aPalin->checkPalindrome();
echo json_encode($showThePalin);
