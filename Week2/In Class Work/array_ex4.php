<?php
// default scale : 3
bcscale(3);

// bcdiv division.
echo bcdiv(105, 6.55957); // 16.007
echo "<br>";

// This is the same without bcscale()
echo bcdiv("105", "6.55957", 3); //16.007
?>