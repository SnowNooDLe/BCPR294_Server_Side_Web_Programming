<?php
    $input = '';
    if(isset($_POST['newValue'])){
        $input = $_POST['newValue'];
    }

    function ReverseString($input){
        $result = "";
  
        $min = strlen($input) - 1;
  
        for ($i = $min; $i >= 0; $i--){
            $result .= $input[$i];
        }
        return $result;

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
    <form action="Ex16.php" method="POST">
    <input type="text" name="newValue"> </input>
    <input type="submit" value="SUBMIT"/>
    <br>

    <?php
        if ($input == ""){
            echo "Plz type something";
        } else {
            echo "Inserted String is: " .$input. "<br>";
            echo "The reverse of String " .$input. " is ";
            echo ReverseString($input);
        }
        
    ?>
</body>
</html>