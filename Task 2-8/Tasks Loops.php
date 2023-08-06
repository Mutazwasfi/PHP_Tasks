<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php
        echo "Task 1<br><br>";

    for ($i=1; $i < 11; $i++) { 
        if ($i<10) {
           echo $i."-";
        }
        else {
            echo $i;
        }
    }   

    echo "<hr>";
    echo "Task 2<br><br>";

    $total =0;
    for ($i=0; $i < 31; $i++) { 
        $total += $i;
    }
    echo $total;

    
    echo "<hr>";
    echo "Task 3<br><br>";

    $result = '';
    for ($i = 0; $i < 5; $i++) {
    //SPACES
    for ($j = 0; $j < 5 - $i; $j++) {
        $result .= " " . chr(65) . " ";
    }
    for ($j = 0; $j < $i; $j++) {
        $result .= " " . chr(65 + $i) . " ";
    }
    $result .= "<br>";
    }
    echo $result;

    echo "<hr>";
    echo "Task 4<br><br>";

    $result = '';
    for ($i = 0; $i < 5; $i++) {
    //SPACES
    for ($j = 0; $j < 5 - $i; $j++) {
        $result .= " 1 ";
    }
    for ($j = 0; $j < $i; $j++) {
        $result .= " " . ($i + 1) . " ";
    }
    $result .= "<br>";
    }

    echo $result;


    echo "<hr>";
    echo "Task 5<br><br>";
    
    $result = "";
    for ($i = 1; $i < 6; $i++) {
    for ($j = 1; $j < 6; $j++) {
        if ($j == $i)
        $result .= " $i ";
        else
        $result .= " 0 ";
    }
    $result .= "<br>";
    }
    echo $result;

    
    echo "<hr>";
    echo "Task 6<br><br>";

    function fac($n)
    {
    if ($n == 1)
        return $n;
    return $n * fac($n - 1);
    }

    echo "factorial of 5 :" . fac(5);

    
    echo "<hr>";
    echo "Task 7<br><br>";

    echo "i don't know";

    echo "<hr>";
    echo "Task 8<br><br>";

    $str8 = 'Orange Coding Academy';
    echo substr_count(strtolower($str8), 'c');

    echo "<hr>";
    echo "Task 9<br><br>";


    echo "<table border = 2>";
    for ($i=1; $i < 7; $i++) { 
        echo "<tr>";
        for ($j=1; $j < 6; $j++) { 
            echo "<td>";
            echo $i . "*" . $j . "=" . $i*$j;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<hr>";
    echo "Task 10<br><br>";

    for ($i=1; $i < 51; $i++) { 
        if ($i%3==0 && $i%5==0) {
            echo "FizzBuzz ";
        }
        else if ($i%3==0) {
            echo "Fizz ";
        }
        else if ($i%5==0) {
            echo "Buzz ";
        }
        else {
            echo $i . " ";
        }
    }

    
    echo "<hr>";
    echo "Task 11<br><br>";


    function rightTri($n){
        $number=1;
    
        for ($i=1; $i <= $n; $i++) { 
            
            for ($j=0; $j < $i; $j++) { 
                echo $number++ . " ";
            }
    
            echo "<br>";
    
        }
    }
    rightTri(5);


    echo "<hr>";
    echo "Task 12<br><br>";

        
    $result = ' ';
    $n = 9;
    $spaces = "&#160&#160";
    for ($i = 1; $i <= 9; $i++) {
    $cond1fr = ceil($n / 2) - $i;
    $cond2 = $i;
    if ($i >= 5) {
        $cond1fr = $i - ceil($n / 2);
        $cond2 = 10 - $i;
    }
    //spaces 
    for ($j = 0; $j < $cond1fr; $j++) {
        $result .= $spaces;
    }
    for ($j = 0; $j < $cond2; $j++) {
        $result .= chr(65 + $j) . "&#160";
    }
    $result .= "<br>";
    }
    echo $result;

    ?>
</body>
</html>