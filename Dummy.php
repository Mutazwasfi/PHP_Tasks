<!DOCTYPE html>
<html>
<body>

<?php

echo "------------------ var_dump : -------------------  <br>";

echo '<br>';

$a = 32;
echo var_dump($a) . "<br>";

$b = "Hello world!";
echo var_dump($b) . "<br>";

$c = 32.5;
echo var_dump($c) . "<br>";

$d = array("red", "green", "blue");
echo var_dump($d) . "<br>";

$e = array(32, "Hello world!", 32.5, array("red", "green", "blue"));
echo var_dump($e) . "<br>";

// Dump two variables
echo var_dump($a, $b) . "<br>";



echo '<br>';


echo "------------------ var_export : -------------------  <br>";

echo '<br>';

$a = 32;
echo var_export($a) . "<br>";

$b = "Hello world!";
echo var_export($b) . "<br>";

$c = 32.5;
echo var_export($c) . "<br>";

$d = array("red", "green", "blue");
echo var_export($d) . "<br>";

$e = array(32, "Hello world!", 32.5, array("red", "green", "blue"));
echo var_export($e) . "<br>";

echo '<br>';

echo "------------------ print_r : -------------------  <br>";

echo '<br>';

$a = array("red", "green", "blue");
print_r($a);

echo "<br>";

$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
print_r($b);

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