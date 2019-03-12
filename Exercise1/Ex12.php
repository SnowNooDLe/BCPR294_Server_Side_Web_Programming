<?php
// Write a program called HarmonicSum to compute the sum of a harmonic series
    function HarmonicSum($num){
        $result_LTR = 0;
        $result_RTL = 0;

        for ($i = 1; $i <= $num; $i++){
            $result_LTR += 1/$i;
        }

        for ($i = $num; $i >= 1; $i--){
            $result_RTL += 1/$i;
        }
        echo "This is from Left to Right: " .$result_LTR."</br>";
        echo "This is from Right to Left: " .$result_RTL;
    }
?>



<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <?php
        echo "Result is: ";
        HarmonicSum(50000);
    ?>
</body>
</html>


