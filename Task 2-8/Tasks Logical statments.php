<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Statments</title>
</head>
<body>
    <?php
                
        echo "Task 1<br><br>";
        $year1=2013;

        if ($year1%4==0) {
            echo $year1. " is a leap year ";
        }
        else {
            echo $year1. " is not a leap year ";
        }
        
        echo "<hr>";
        echo "Task 2<br><br>";

        $temp2=27;

        if ($temp2<=20) {
            echo "no beach for you";
        }
        else {
            echo " it is a summertime!";
        }

        echo "<hr>";
        echo "Task 3<br>";

        function test3($x, $y) 
        {
            return $x == $y ? ($x + $y)*3 : $x + $y;
        }
        echo test3(2, 2)."<br>"; 

        echo "<hr>";
        echo "Task 4<br>";

        
        function test4($x, $y) 
        {
            return $x + $y == 30 ? $x + $y : "false";
        }
        echo test4(10, 10)."<br>";

    
        echo "<hr>";
        echo "Task 5<br>";

        function test5($x) 
        {
            return $x%3 == 0 && $x>0 ? "true" : "false";
        }
        echo test5(20)."<br>";
        
        echo "<hr>";
        echo "Task 8<br>";
        
        function calculate_electricity_bill($units) {
            $first_unit_cost = 3.50;
            $second_unit_cost = 4.00;
            $third_unit_cost = 5.20;
            $fourth_unit_cost = 6.50;
    
            if($units <= 50) {
                $bill = $units * $first_unit_cost;
            }
            else if($units > 50 && $units <= 150) {
                $temp = 100 * $first_unit_cost;
                $remaining_units = $units - 50;
                $bill = $temp + ($remaining_units * $second_unit_cost);
            }
            else if($units > 150 && $units <= 250) {
                $temp = (50 * $first_unit_cost) + (100 * $second_unit_cost);
                $remaining_units = $units - 150;
                $bill = $temp + ($remaining_units * $third_unit_cost);
            }
            else {
                $temp = (50 * $first_unit_cost) + (100 * $second_unit_cost) + (100 * $third_unit_cost);
                $remaining_units = $units - 250;
                $bill = $temp + ($remaining_units * $fourth_unit_cost);
            }
            return number_format((float)$bill, 2, '.', '');
        }
 
        echo "<hr>";
        echo "Task 9<br>";

        function calculator($x9,$y9,$op9){
            switch ($op9) {
                case "+":
                    echo $x9+$y9;
                    break;
                case "-":
                    echo $x9-$y9;
                    break;
                case "*":
                    echo $x9*$y9;
                    break;
                default:
                echo $x9/$y9;
                    break;
            }
        }

        echo "<hr>";
        echo "Task 10<br>";

        $age=15;

        if ($age>=18) {
            echo "is eligiable to vote";
        }
        else {
            echo "tough luck, kick rooks kid!!";
        }


        echo "<hr>";
        echo "Task 11<br>";

        $number=-60;

        if ($number>0) {
            echo "is postive";
        }
        else if($number==0){
            echo "zero";
        }
        else {
            echo "is negative";
        }

        
        echo "<hr>";
        echo "Task 12<br>";

        $marks = array(60,86,95,63,55,74,79,62,50);
        $marksCount = count($marks);
        $marksSum = array_sum($marks);
        $avarage = $marksSum/$marksCount;

        if ($avarage<60) {
            echo "F";
        }
        else if($avarage<70) {
            echo "D";
        }
        else if($avarage<80) {
            echo "C";
        }
        else if($avarage<90) {
            echo "B";
        }
        else {
            echo "A";
        }

    ?>
</body>
</html>