<?php
// write a program called CheckMark which prints "Pass" if the int variable "mark" is more than or equal to 50; else FAIL
    function CheckMark($mark){
        $result = "PASS";
        if ($mark < 50){
            $result = "FAIL";
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
        CheckMark(52);
    ?>
</body>
</html>


