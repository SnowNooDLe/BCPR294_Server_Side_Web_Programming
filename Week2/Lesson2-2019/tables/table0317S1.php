
<?php 

function makeTable() 
{
	$result = '';
	for ( $i = 1; $i <= 400; $i++ )
	{
		$ii = pow($i,2);
		$result .=  "<tr><td>$i</td><td>$ii</td)</tr>";
	}
	
	return $result;
}

echo '<table border="1px">';
echo '<tr><th>#</th><th>squared</th)</tr>';
echo makeTable();

echo '</table>';