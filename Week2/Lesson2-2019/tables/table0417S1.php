
<?php 

function makeTable( $numbers ) 
{
	$result = '';
	$result .= '<table border="5px">';
	$result .= '<tr><th>#</th><th>squared</th)</tr>';
	foreach ($numbers as $index => $value)
	{	
		$result .=  "<tr><td>$index</td><td>$value</td)</tr>";
	}
	$result .= '</table>';
	return $result;
}



$numbers = array();
for ( $i = 1; $i <= 5; $i++ )
{
		$ii = pow($i,3);
		$numbers[ $i] = $ii;
}

echo makeTable( $numbers );

