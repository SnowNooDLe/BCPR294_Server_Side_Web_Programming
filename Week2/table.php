<?php
// CONST 
$input = 0;
$numbers = array();

define("table_text", "Table shown below");
// import
include( 'maketable17s1.inc' );
if(isset($_POST['newValue']) ){
    $input = $_POST['newValue'];
}
function gettingArray($max){
    global $numbers;
    for ($i = 1; $i<=$max; $i++){
        $ii = bcmul($i, '123.21312312412412412412412412412352352423424', 2000);
        $numbers[$i] = $ii;
    }
    return $numbers;
}



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
    <form action="table.php" method="POST">
    <input type="text" name="newValue"> </input>
    <input type="submit" value="SUBMIT"/>
    <br>
    <?php
    
    if ($input == 0){
        echo "Plz put the value";
    } else{
        echo table_text;
        echo makeTable(gettingArray($input));
    }
    
    ?>
</body>
</html>