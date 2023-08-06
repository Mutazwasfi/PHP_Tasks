<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
  <?php

    echo "Task 1<br><br>";
        
  // PHP code to check whether a number is prime or Not
  // function to check the number is Prime or Not
    function primeCheck($number){
      if ($number == 1)
      return 0;
      for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
        return 0;
      }
      return 1;
    }
        
  // Driver Code
        $number = 3;
        $flag = primeCheck($number);
        if ($flag == 1)
            echo "Prime";
        else
        echo "Not Prime";

        echo "<hr>";
        echo "Task 2<br><br>";

        echo strrev("reverse");

        echo "<hr>";
        echo "Task 3<br><br>";

    // PHP program to check if a string has all
    // lower case characters
        
        $str3 = array('remove');
        
    // Checking for above three strings one by one.
        foreach ($str3 as $case3) {
            if (ctype_lower($case3)) {
                echo "Yes\n";
            } else {
                echo "No\n";
            }
        }

        
        echo "<hr>";
        echo "Task 4<br><br>";

        
        function varSwap($x,$y,$z=0){
            $z=$x;
            $x=$y;
            $y=$z;
            echo "x : " .$x ." y: ".$y;
        }
        varSwap(12,10);

  echo "<hr>";
  echo "Task 6<br><br>";

    function isArmstrongNum($number) {
  // Convert the number to a string to count its digits
    $num_str = (string)$number;
    $total_digits = strlen($num_str);
    $sum = 0;
            
  // Loop through each digit and calculate the sum of digits raised to the power of total digits
    for ($i = 0; $i < $total_digits; $i++) {
      $digit = (int)$num_str[$i];
      $sum += pow($digit, $total_digits);
    }

    if ($sum === $number) {
        echo "$number is an Armstrong number.";
    } else {
        echo "$number is not an Armstrong number.";
      }
    }
    isArmstrongNum(407);

    echo "<hr>";
    echo "Task 7<br><br>";

    function check_palindrome($string7) {
    if ($string7 == strrev($string7))
      echo $string7." is a Palindrome string.\n";
    else
      echo $string7." is not a Palindrome string.\n";
    }

    check_palindrome("Eva can I see bees in a cave");


    echo "<hr>";
    echo "Task 8<br><br>";
    
    $array8 = array(2, 4, 7, 4, 8, 4);
    function removeDups($arr) {
      $newArr = array_unique($arr);
      print_r($newArr);
    }
    removeDups($array8);
    ?>
</body>
</html>