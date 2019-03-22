
<?php 

echo '<table border="1px">';
echo '<tr><th>#</th><th>squared</th)</tr>';
for ( $i = 1; $i <= 400; $i++ )
{
	$ii = pow($i,2);
	echo "<tr><td>$i</td><td>$ii</td)</tr>";
}

echo '</table>';