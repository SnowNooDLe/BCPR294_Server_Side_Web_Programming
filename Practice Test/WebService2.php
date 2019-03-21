<?php
$query = 'balnk';

if (isset ($_SERVER['QUERY_STRING'])){
    $query = $_SERVER['QUERY_STRING'];
    if (!empty($query)){
        $query = $_SERVER['QUERY_STRING'];
    } else {
        $query = 'blank';
    }
}

$data = array('USD' => ['America', 'Dollar']);

$answer = 'Not Found';

if (array_key_exists($query, $data)){
    $answer = $data[$query];
}

header( 'Content-Type: application/json');
echo json_encode($answer);
?>
