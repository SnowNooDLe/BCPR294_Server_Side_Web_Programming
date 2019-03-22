<?php
// using include_once
include_once( 'makeTable.inc' );
// global variable & creating an array
$numbers = array();
$input = 0;
// CONST variable
define("text_table", "The table is like below ");



if(isset($_POST['newValue'])){
    $input = $_POST['newValue'];
}

function makeArray( $input){
    global $numbers;
    // static variable
    global $xOfTable;

    for ($i = 1; $i <= $input; $i++){
        $productN = 1;
        for ($j = 1; $j <= $i; $j++){
            $productN = bcmul($productN, $j, 200);
        }
        $numbers[$i] = $productN;
    }
    return $numbers;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Weekly Test 2</title>
</head>
<body>
    <form action="week2.php" method="POST">
    <input type="text" name="newValue"> </input>
    <input type="submit" value="SUBMIT"/>
    <br>

    <?php
        if ($input == 0){
            echo "Plz put the value into textarea first ";
        } else{
            echo text_table;
            echoAsTable(makeArray($input));
        }
    ?>
</body>
</html>