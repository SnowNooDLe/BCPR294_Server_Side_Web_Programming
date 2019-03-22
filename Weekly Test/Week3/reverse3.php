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
function reverseWord ($word){
    $reversedWord = '';
    $j = -1;
    $lengthOfWord = strlen($word);
    while ($lengthOfWord > 0){
        $reversedWord .= substr($word, $j, 1);
        $j--;
        $lengthOfWord--;
    }
    return $reversedWord;
}

$reversed = ['', ''];
if (! empty($query) && $query != 'blank'){
    $value = reverseWord($query);
    $reversed = [$query, $value];
    
} else{
    $reversed = 'type string plz';
}

// header ('Content-Type: application/JSON');
echo json_encode($reversed);

?>