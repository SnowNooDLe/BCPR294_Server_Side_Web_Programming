<?php
$total_value = 0;
$average_value = 0;
$upper_limit = 100;
$count = 0;
// modify the program to find the "sum of the squars" of all the numbers from 1 to 100.
    function SumAndAverage(){
        global $total_value;
        global $average_value;
        global $upper_limit;
        global $count;

        for ($num = 1; $num <= $upper_limit; $num++){
            $total_value += $num * $num;
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