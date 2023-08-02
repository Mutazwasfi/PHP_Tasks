<!DOCTYPE html>
<html>
<body>

<?php

echo "------------------ get_declared_classes : -------------------  <br>";

echo '<br>';

print_r(get_declared_classes());


echo '<br><br>';


echo "------------------ get_class : -------------------  <br>";


class foo {
    function name()
    {
        echo "My name is " , get_class($this) , "<br>";
    }
}

// create an object
$bar = new foo();

// external call
echo "Its name is " , get_class($bar) , "<br>";

// internal call
$bar->name();


echo "------------------ get_class_vars : -------------------  <br>";

echo '<br>';

class myclass {

    public $var1; // this has no default value...
    public $var2 = "xyz";
    public $var3 = 100;
    private $var4;

}

$my_class = new myclass();

$class_vars = get_class_vars(get_class($my_class));

foreach ($class_vars as $name => $value) {
    echo "$name : $value<br>";
}

echo '<br>';
echo '<br>';


echo "------------------ get_class_methods : -------------------  <br>";

echo '<br>';


class myclass2 {
    // constructor
    function __construct()
    {
        return(true);
    }

    // method 1
    function myfunc1()
    {
        return(true);
    }

    // method 2
    function myfunc2()
    {
        return(true);
    }
}

$class_methods = get_class_methods('myclass2');

foreach ($class_methods as $method_name) {
    echo "$method_name<br>";
}



echo '<br>';
echo '<br>';



echo "------------------ class_exists : -------------------  <br>";

echo '<br>';

// Check that the class exists before trying to use it
if (class_exists('MyClass')) {
    $myclass = new MyClass();
    echo "it exists";
}

echo '<br>';

if (class_exists('MyClass2')) {
    $myclass = new MyClass();
    echo "it exists";
}

echo '<br>';

if (class_exists('MyClass5')) {
    $myclass = new MyClass();
    echo "it exists";
}
echo '<br>';
echo '<br>';

?>
 
</body>
</html>