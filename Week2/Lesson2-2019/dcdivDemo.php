<?php

// default scale : 3
bcscale(3);
echo bcdiv(105, 6.55957); // 16.007
echo '<br>';
// this is the same without bcscale()
echo bcdiv('105', '6.55957', 3); // 16.007

?>