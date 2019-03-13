<?php
    function Fibonacci($n){
        $firstNum = 1;
        $secondNum = 1;
        $averageVal = 0;
        $sum = 0;
        $result = "";
        
        for ($i = 1; $i <= $n; $i++){
            if ($i == 1 || $i == 2){
                $result .= "1 ";
                $sum += 1;
            } else{
                $fibNum = $firstNum + $secondNum;
                $result .= "$fibNum ";
                $firstNum = $secondNum;
                $secondNum = $fibNum;
                $sum += $fibNum;
            }
        }
        $averageVal = $sum / $n;
        echo "The first " .$n. " Fibonacci numbers are <br>";
        echo $result;
        echo "<br>";
        echo "The average is " .$averageVal.".";

    }
?>



</<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        
        echo Fibonacci(20);
    ?>
</body>
</html>