<?php
$total_value = 0;
$average_value = 0;
// Modify Q4 to use "do-while" loop
    function SumAndAverage($value){
        global $total_value;
        global $average_value;

        do{
            $total_value += $num;
            $num++;
        }while ($num <= $value);
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