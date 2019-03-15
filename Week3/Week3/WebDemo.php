<?php
$query = 'blank';
if (isset($_SERVER [ 'QUERY_STRING' ]))
{
    $query = $_SERVER [ 'QUERY_STRING' ];
    if (!empty($query))
    {
        $query = $_SERVER [ 'QUERY_STRING' ];
    } 
    else 
    {
        $suqry = 'blank';
    }
}

$data = array('blank'=>'Enter Currency Code', 'AED'=>'Dirham', 'AUD'=>'Australia Dollar', 'NZD'=>'New Zealand Dollar');
$answer = 'Not Found';

if (array_key_exists($query, $data)){
    $answer = $data[$query];
}

header('Content-Type: application/json');
echo json_encode ($answer);

?>