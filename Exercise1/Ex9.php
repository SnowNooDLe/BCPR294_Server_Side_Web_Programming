<?php
$total_value = 0;
$average_value = 0;
$upper_limit = 100;
$count = 0;
// modify the program to sum those numbers from 1 to 100 that is divisible by 7, and compute the average
    function SumAndAverage(){
        global $total_value;
        global $average_value;
        global $upper_limit;
        global $count;

        for ($num = 1; $num <= $upper_limit; $num++){
            if ($num % 7 == 0){
                $total_value += $num;
            }
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