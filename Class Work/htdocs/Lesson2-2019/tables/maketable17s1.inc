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