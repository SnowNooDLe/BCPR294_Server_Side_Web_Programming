
<?php 

include( 'maketable17s1.inc' );



$numbers = array();
for ( $i = 1; $i <= 5; $i++ )
{
		$ii = pow($i,4);
		$numbers[ $i] = $ii;
}

echo makeTable( $numbers );

