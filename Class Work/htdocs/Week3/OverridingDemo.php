<?php
// parent class
class MyClass
{
    protected function myFunc()
    {
        echo "MyClass :: myFunc()";
        echo "<br>";
    }
}
// OtherClass is child class
class OtherClass extends MyClass
{
    // Overrite parent's definition
    public function myFunc()
    {
        // But still call the parent function
        parent:: myFunc();
        echo "OtherClass:: myFunc";
    }
}

// creating an Object
$class = new OtherClass();
$class -> myFunc();
?>
