<?php
$sum = 0;
$value = 0;

if(isset($_POST['newValue']) ){
    $value = $_POST[ 'newValue' ];
}

function CalcSum($value){
    echo "The sum of $value values is <br>";
    global $sum;
    for ($num = 1; $num <= $value; $num++){
        $sum = $sum + $num;
        echo "$num";
        echo str_repeat("&nbsp;", 5);
        echo "$sum <br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Enter Values</title>
</head>
<body>
<form action="CalcSum.php" method="POST" >
<input type="text" name="newValue" > </input>
<input type="submit" value="SUBMIT" />
<h1> 
<?php 
    if (filter_var($value, FILTER_VALIDATE_INT)) {
        CalcSum($value);
    }
    else{
        echo "Please insert the integer value first :)";
    }
    
?>
</h1>
</form>
</body>
</html>