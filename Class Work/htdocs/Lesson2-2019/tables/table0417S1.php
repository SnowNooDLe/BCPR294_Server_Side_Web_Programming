
<?php 

function makeTable( $numbers ) 
{
	$result = '';
	$result .= '<table border="5px">';
	$result .= '<tr><th>#</th><th>Cubed</th)</tr>';
	foreach ($numbers as $index => $value)
	{	
		$result .=  "<tr><td>$index</td><td>$value</td)</tr>";
	}
	$result .= '</table>';
	return $result;
}

// Creation of Array

$numbers = array();
for ( $i = 1; $i <= 500; $i++ )
{
		$ii = pow($i,3);
		$numbers[ $i] = $ii;
}

echo makeTable( $numbers );

