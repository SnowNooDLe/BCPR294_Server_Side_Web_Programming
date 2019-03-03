<?php
static $sum = 0;
const MAX = 100;
for ($num = 1; $num <= MAX; $num++)
{
$sum = $sum + $num;
echo "$num -- $sum <br>";
echo '----------------' . '<br>';

}
