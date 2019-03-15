<?php
// Example 2
class A
{
    // attributes
    const DIGITS = '1235467890';
    private $name = 'unknown';
    private $iq = 100;

    // methods
    function __construct ($newName)
    {
        // PHP's syntax. not like this.name
        $this->name = $newName;
    }

    // get the values for private properties.
    public function get()
    {
        // wrong way
        // return this->$name . ' has an IQ of '. this->iq;
        // right way
        return $this->name . ' has an IQ of '. $this->iq;
    }

    public function setIQ ($newIQ)
    {
        // wrong way
        // return this->iq = $newIQ;
        // right way
        return $this->iq = $newIQ;
    }
}

$a1 = new A ('Mike');
var_dump($a1);
echo "<br>" . $a1->get() . "<br>";
// cannot access as its a private value
// echo $a1->name;

$a2 = new A ('Tom');
// It will just print 120 ass setIQ return the value of IQ.
echo "<br>" . $a2->setIQ( 120 ) . "<br>";
// This will print out in sentence way as thats what get() does
echo "<BR>" . $a2->get() . "<br>";

echo A :: DIGITS;
?>