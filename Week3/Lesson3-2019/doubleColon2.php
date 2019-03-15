<?php
class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc()";
		echo '</br>';
    }
}

class OtherClass extends MyClass
{
    // Override parent's definition
    public function myFunc()
    {
        // But still call the parent function
        parent::myFunc();
        echo "OtherClass::myFunc()";
    }
}

$class = new OtherClass();

$class->myFunc();
?>