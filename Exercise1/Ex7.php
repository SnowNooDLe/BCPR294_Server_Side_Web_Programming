<?php
$total_value = 0;
$average_value = 0;
$upper_limit = 8989;
$count = 0;
// modify the program to sum from 111 to 8989 and compute the average
    function SumAndAverage(){
        global $total_value;
        global $average_value;
        global $upper_limit;
        global $count;

        for ($num = 111; $num <= $upper_limit; $num++){
            $total_value += $num;
            $count++;

        }
        $average_value = $total_value/$count;
        
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
        SumAndAverage();
    ?>
</body>
</html>