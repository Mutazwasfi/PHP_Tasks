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
        $number = 31;
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
    

    ?>
</body>
</html>