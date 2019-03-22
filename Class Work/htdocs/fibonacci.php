<?php

$query = 'blank';

if (isset($_SERVER[ 'QUERY_STRING' ])){
    $query = $_SERVER[ 'QUERY_STRING'];
    if (! empty($query)){
        $query = $_SERVER[ 'QUERY_STRING'];
    } else {
        $query = 'blank';
    }
}

function fibonacci($number){
    // n - 2 value
    $firstNum = 1;
    // n - 1 value
    $secondNum = 1;
    $fibList = [];

    for ($i = 1; $i <= $number; $i++){
        if ($i == 1 || $i == 2){
            array_push($fibList, 1);
        } else{
            $fibNum = $firstNum + $secondNum;
            array_push($fibList, $fibNum);
            $firstNum = $secondNum;
            $secondNum = $fibNum;
        }
    }
    return $fibList;
}

if (!empty($query) && $query != 'blank'){
    header ('Content-Type: application/JSON');
    echo json_encode(fibonacci($query));
} else {
    echo "Please type N number to see the Fibonacci number upto N";
}

// $datas = array('blank' => 'Please type N value to see Fibonacci number upto N ');

// $answer = 'Not Found';


// if (! empty($query) && $query != 'blank'){
//     $value = fibonacci($query);
//     $datas[$query] = [$query, $value];
// }

// if (array_key_exists($query, $datas)){
//     $answer = $datas[$query];
// }


// header ('Content-Type: application/JSON');
// echo "just testing to see whether array works \n";
// print_r($datas);
// echo "and this is the user input string and reversed string \n";
// echo json_encode(fibonacci($query));
// echo $answer;


?>