<?php
$total_value = 0;
$average_value = 0;
// Modify Q4 to use a "while-do" loop instead of "for" loop
    function SumAndAverage($value){
        global $total_value;
        global $average_value;

        while ($num <= $value){
            $total_value += $num;
            $num++;
        }
        $average_value = $total_value/$value;
        
        echo "The sum is $total_value <br/>";
        echo "The average is $average_value <br/>";
    }
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        SumAndAverage(100);
    ?>
</body>
</html>