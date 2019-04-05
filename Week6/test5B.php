<?php

class Numbers {
    public $input;
    protected $result = [];

    function __construct($userInput){
        $this->input = $userInput;
    }

    function checkingPerfectNumber () {
        $sum = 0;
        $status = false;
        for ($i = 1; $i < $this->input; $i++){
            if ($this->input % $i == 0){               
                $sum += $i;
            }
        }
        if ($sum == $this->input){
            $status = true;
        } 
        $this->result = ["number" => (int)$this->input, "isPerfect" => $status];
    }

    function get () {
        return $this->result;
    }

    
}

$query = 'blank';
define("MIN", 0);
define("MAX", 10000);

if (isset($_SERVER[ 'QUERY_STRING' ])){
    $query = $_SERVER[ 'QUERY_STRING'];
    if (! empty($query)){
        $query = $_SERVER[ 'QUERY_STRING'];
    } else {
        $query = 'blank';
    }
}

if(! empty($query) && $query != 'blank'){
    if ($query < MIN){
        echo "Minimum number is 0";
    } else if ($query > MAX){
        echo "Maximum number is 10000";
    } else {
        header('Content-Type: application/JSON');
        $isPerfect = new Numbers($query);
        $isPerfect->checkingPerfectNumber();
        echo json_encode($isPerfect->get());
    }
} else{
    echo "Type the N value to check whether N is perfect number or not";
}

?>