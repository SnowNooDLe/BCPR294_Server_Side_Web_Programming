<?php
//from outside the class definition
class MyClass {
    const CONST_VALUE = 'A constant value';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE;
echo '</br>';
echo MyClass::CONST_VALUE;
?>