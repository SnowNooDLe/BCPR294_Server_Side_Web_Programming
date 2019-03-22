<?php
$query = 'blank';

class Fibonacci{
    public $givenValue;
    protected $fibList = [];

    function __construct ($newValue){
        $this->givenValue = $newValue;
    }

    public function FibonacciNum(){
        // n - 2 value
        $firstNum = 1;
        // n - 1 value
        $secondNum = 1;

        for ($i = 1; $i <= $this->givenValue; $i++){
            if ($i == 1 || $i == 2){
                array_push($this->fibList, 1);
            } else{
                $fibNum = $firstNum + $secondNum;
                array_push($this->fibList, $fibNum);
                $firstNum = $secondNum;
                $secondNum = $fibNum;
            }
        }
    }

    public function get(){
        return $this->fibList;
    }
}
if (isset($_SERVER[ 'QUERY_STRING' ])){
    $query = $_SERVER[ 'QUERY_STRING'];
    if (! empty($query)){
        $query = $_SERVER[ 'QUERY_STRING'];
    } else {
        $query = 'blank';
    }
}

if (!empty($query) && $query != 'blank'){
    header ('Content-Type: application/JSON');
    $fib = new Fibonacci($query);
    $fib->FibonacciNum();
    echo json_encode($fib->get());
} else {
    echo "Please type N number to see the Fibonacci number upto N";
}
?>