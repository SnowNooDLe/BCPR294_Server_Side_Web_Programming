<?php
$value = 0;
$total_value = 0;

if(isset($_POST['newValue']) ){
    $value = $_POST['newValue'];
}
    function checkNum($value){
        // each line of println
        global $total_value;
        // for looping from 1 to $value that user put
        for ($num = 1; $num <= $value; $num++){
            echo "<br>";
            // check whether the number is divisible by 2 which is an even number
            if ($num % 2 == 0){
                echo "$num is an Even Number <br>";
                $total_value += $num;
            }
            // if not then its odd number
            else{
                echo "$num is an Odd Number <br>";
            }   
        }
        echo "<br>";
        $result_string = "The sum of the even values in this range is ";
        echo $result_string.$total_value;
    }
?>

<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
    <form action="TomSonTest1.php" method="POST">
    <input type="text" name="newValue"> </input>
    <input type="submit" value="SUBMIT"/>
    <?php
        checkNum($value);
    ?>
</body>
</html>