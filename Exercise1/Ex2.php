<?php
// Wirte a program called CheckNumber which prints "Odd Number" if the int variable "number" is odd, or "even number" otherwise
    function CheckNumber($number){
        $result = "Odd Number";
        
        if ($number % 2 == 0){
            $result = "Even Number";
        }
        echo $result;
    }
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        for ($num = 0; $num < 10; $num++){
            echo "$num is an ";
            CheckNumber($num);
            echo "<br/>";
        }
    ?>
</body>
</html>