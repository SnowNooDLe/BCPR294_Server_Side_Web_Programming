<?php
// Write a program called Product1toN to compute the product of integers 1 to 10.
    function Product1toN($num){
        $result = 1;
        for ($i = 1; $i <= $num; $i++){
            $result *= $i;
        }
        echo $result;
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
        Product1toN(10);
    ?>
</body>
</html>


