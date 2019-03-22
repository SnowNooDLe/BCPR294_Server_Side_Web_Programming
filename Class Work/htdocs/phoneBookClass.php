<?php
$query = 'blank';

class PhoneBook{
    public $givenString;
    protected $result;

    function __construct ($newValue){
        $this->givenString = $newValue;
    }

    public function convert (){
        $this->result = '';
        $this->givenString = strtoupper($this->givenString);

        for ($i = 0; $i < strlen($this->givenString); $i++){
            switch ($this->givenString[$i]){
                case 'A':
                case 'B':
                case 'C': 
                $this->result .= '2';
                break;
                
                case 'D';
                case 'E';
                case 'F';
                $this->result .= '3';
                break;
                
                case 'G';
                case 'H';
                case 'I';
                $this->result .= '4';
                break;
                
                case 'J';
                case 'K';
                case 'L';
                $this->result .= '5';
                break;
                
                case 'M';
                case 'N';
                case 'O';
                $this->result .= '6';
                break;
                
                case 'P';
                case 'Q';
                case 'R';
                case 'S';
                $this->result .= '7';
                break;
                
                case 'T';
                case 'U';
                case 'V';
                $this->result .= '8';
                break;
                
                case 'X';
                case 'Y';
                case 'Z';
                $this->result .= '9';
                break;
            }
        }
    }

    public function get(){
        return $this->result;
    }
}

	$query = '';
    $answer = '';
    // when user type something in input area and clicked submit button
    // will excute whole page
	if (isset( $_POST[ 'phoneword' ]  ) )
	{
        $query = $_POST[ 'phoneword' ];	
        $phoneBook = new PhoneBook($query);
        $phoneBook->convert();
        $answer = $phoneBook->get();
	}
?>


<html>  
<body>
<form action="phoneBookClass.php" method="POST" >
<label>Enter the word</label>
<input type="phoneword" name="phoneword" size="50"/>
<input type="submit" value="SUBMIT" />
<br>
<?php 
echo $answer;
?>
</form>
</body>
</html>