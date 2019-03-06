<?php
// Write a program Called PrintWord which prints "ONE", "TWO", ... "NINE", "OTHER" if the int variable number is 1,2...,9 or other.
// respectively use (a) a nested if, (b) a switch
    function PrintWorld_nested_if($number){
        $result = "OTHER";
        
        if ($number == 1){
            $result = "ONE";
        }
        else if ($number == 2){
            $result = "TWO";
        }
        else if ($number == 3){
            $result = "THREE";
        }
        else if ($number == 4){
            $result = "FOUR";
        }
        else if ($number == 5){
            $result = "FIVE";
        }
        else if ($number == 6){
            $result = "SIX";
        }
        else if ($number == 7){
            $result = "SEVEN";
        }
        else if ($number == 8){
            $result = "EIGHT";
        }
        else if ($number == 9){
            $result = "NINE";
        }
        echo $result;
    }

    function PrintWorld_switch($number){       
        switch($number){
            case 1:
                echo "ONE";
                break;
            case 2:
                echo "TWO";
                break;
            case 3:
                echo "THREE";
                break;
            case 4:
                echo "FOUR";
                break;
            case 5:
                echo "FIVE";
                break;
            case 6:
                echo "SIX";
                break;
            case 7:
                echo "SEVEN";
                break;
            case 8:
                echo "EIGHT";
                break;
            case 9:
                echo "NINE";
                break;
            default:
                echo "OTHER";
                break;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        echo "This is nested if case <br/>";
        for ($num = 0; $num <= 10; $num++){
            echo "$num is an ";
            PrintWorld_nested_if($num);
            echo "<br/>";
        }

        echo "<br/>";

        echo "This is switch case <br/>";
        for ($num = 0; $num <= 10; $num++){
            echo "$num is an ";
            PrintWorld_switch($num);
            echo "<br/>";
        }
    ?>
</body>
</html>