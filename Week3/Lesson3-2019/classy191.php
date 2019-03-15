<?php


class A
{
	const DIGITS = '1234567890';
	private $name = 'unknown';
	private $iq = 100;
	
	function __construct( $newName ) 
	{
		$this->name = $newName;
	}
	
	public function get()
	{
		return $this->name . ' has an IQ of ' . $this->iq ;
	}
	
	public function setIQ( $newIQ )
	{
		$this->iq = $newIQ;
	}
}

$a1 = new A( 'Freda' );

var_dump( $a1 );
echo '<br>' . $a1->get() . '<br>';
 $a2 = new A('Amit');
 $a2->setIQ( 120 );
 var_dump( $a2 );
echo '<br>' . $a2->get() . '<br>';

echo A::DIGITS;
