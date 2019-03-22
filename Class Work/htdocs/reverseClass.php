<?php

$query = 'blank';
class ReverseString{
    public $givenString;
    protected $reversedString = '';

    function __construct ($newString){
        $this->givenString = $newString;
    }
    public function reverseWord(){
        $lengthOfWord = strlen($this->givenString);
        for ($i = 0; $i <= $lengthOfWord; $i++){
            $this->reversedString .= substr($this->givenString, ($lengthOfWord - $i), 1);
        }
    }

    public function get(){
        return $this->reversedString;
    }
}
// URL like localhost/reverseClass.php?asdfasdfsadf
if (isset($_SERVER[ 'QUERY_STRING' ])){
    $query = $_SERVER[ 'QUERY_STRING'];
    if (! empty($query)){
        $query = $_SERVER[ 'QUERY_STRING'];
    } else {
        $query = 'blank';
    }
}

$reversed = ['', ''];
header ('Content-Type: application/JSON');
if (! empty($query) && $query != 'blank'){
    $reversingWord = new ReverseString($query);
    echo $reversingWord->reverseWord();
    $value = $reversingWord->get();
    $reversed = [$query, $value];
} else{
    $reversed = "type string plz";
}
echo json_encode($reversed);



?>