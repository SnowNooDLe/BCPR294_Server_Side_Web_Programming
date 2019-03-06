<?php
$total_value = 0;
$average_value = 0;
// Write a program called SumAndAverage to produce sum of 1,2,3,...,100. Also compute and display the average.
    function SumAndAverage($value){
        global $total_value;
        global $average_value;

        for ($num= 1; $num <= $value; $num++){
            $total_value += $num;
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