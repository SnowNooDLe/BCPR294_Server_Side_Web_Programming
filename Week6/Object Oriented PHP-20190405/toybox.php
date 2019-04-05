<?php

class Toy 
{
	private $name;
	private $cost;
	
	public function __construct ($newName, $newCost) 
	{
		$this->name = $newName;
		$this->cost = $newCost;
	}
	public function get () 
	{
		return "$this->name @$$this->cost";
	}
}

class Toybox 
{
	private $allMyToys = array();
	public function addToy( $newName, $newCost )
	{
		$aNewToy = new Toy($newName, $newCost);
		$this->allMyToys[] = $aNewToy;
	}
	public function getToys () 
	{
		$out = '';
		foreach ( $this->allMyToys as $toy) 
		{
			$out .= $toy->get() . '<br>';
		}
		return $out;
	}
}

$aToyBox = new Toybox();
$aToyBox->addToy('robot', 12.34 );
$aToyBox->addToy('doll', 43.56 );
//var_dump($aToyBox);
echo $aToyBox->getToys();




