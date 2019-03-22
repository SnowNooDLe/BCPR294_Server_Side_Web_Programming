<!-- for test, focus on this Q5 and .inc file -->
<?php 
// including .inc file (Same as import) to use whats in there.

include( 'maketable17s1.inc' );



$numbers = array();
for ( $i = 1; $i <= 5; $i++ )
{
		$ii = pow($i,4);
		$numbers[ $i] = $ii;
}

echo makeTable( $numbers );

