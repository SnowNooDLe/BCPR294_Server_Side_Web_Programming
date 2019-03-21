<?php
$query = 'blank';

if (isset($_SERVER[ 'QUERY_STRING' ])){
    $query = $_SERVER[ 'QUERY_STRING' ];
    if (!empty($query)){
        $query = $_SERVER[ 'QUERY_STRING'];
    } else {
        $query = 'blank';
    }
}

$data = array('blank' => 'Enter an currency code',
              'AED' => ['United Arab Emirates', 'Dirham'],
              'AFN' => ['Afghanistan', 'Afghani'],
              'birds' => 'flighty',
              'AUD' => ['Australia', 'Dollar'],
              'EUR' => ['Europe', 'EUR'],
              'GBP' => ['Great Britain', 'Pound'],
              'INR' => ['India', 'Rupee'],
              'JPY' => ['Japan', 'Yen'],
              'USD' => ['United States of America', 'Dollar']);

$answer = 'Not Found';
if (array_key_exists( $query, $data)){
    $answer = $data[ $query];
}

header( 'Content-Type: application/json');
echo json_encode($answer);
echo "<br>";
echo $_SERVER['SERVER_NAME'];
?>