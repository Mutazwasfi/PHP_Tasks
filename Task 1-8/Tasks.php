<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
                
        echo "Task 1<br>";
        $colors = array("red","green","white");
        echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the ". $colors[0] . " carpet, the " . $colors[1] . " lawn, the " . $colors[2] . " house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
        
        
        echo "<hr>";
        echo "Task 2<br>";
        $colors2 = array('white', 'green', 'red');
        sort($colors2);

        $length2 = count($colors2);
        for($i = 0; $i < $length2; $i++) {
          echo $colors2[$i];
          echo "<br>";
        }
        echo "<hr>";
        echo "Task 3<br>";

        $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

        foreach ($cities as $country => $capital) {
            echo "The capital of $country is $capital"."<br>";
        }

        echo "<hr>";
        echo "Task 4<br>";

        $color4 = array (4 => 'white', 6 => 'green', 11=> 'red');
        echo reset($color4)."<br>";

        echo "<hr>";
        echo "Task 5<br>";

        $array = array( '1', '2', '3', '4', '5' );
 
        echo 'array : ';
        foreach ($array as $x5)
        {
        echo "$x5 ";
        }
        
        echo "<br>";
        
        $newItem = '$';
                
        $location = 3;
                
        array_splice( $array, $location, 0, $newItem );
        
        foreach ($array as $x5)
        {
        echo "$x5 ";
        }

        
        echo "<hr>";
        echo "Task 6<br>";

        $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
        asort($fruits);

        foreach ($fruits as $key => $value) {
            echo " $key : $value"."<br>";
        }
        
 
        echo "<hr>";
        echo "Task 7<br>";

        $tempReads= "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";

        $array = explode(",",$tempReads);
        $readsCount = count($array);
        $readsSum = array_sum($array);
        $avarage = $readsSum/$readsCount;

        echo "Average Temperature is: " .$avarage;

        sort($array);

        echo "<br>List of five lowest temperatures: ";

        for ($i=0; $i < 5; $i++) { 
            echo $array[$i].", ";
        }

        echo "<br>List of five highest temperatures: ";

        for ($j=($readsCount-5); $j < $readsCount; $j++) { 
            echo $array[$j].", ";
        }


        
        echo "<hr>";
        echo "Task 8<br>";

        $array81 = array("color" => "red", 2, 4);
        $array82 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

        echo '<pre>' ; print_r(array_merge($array81,$array82));
 


        echo "<hr>";
        echo "Task 9<br>";

        $colors9 = array("red","blue", "white","yellow");
        $colors9 = array_map('strtoupper', $colors9);
        echo "<pre>"; print_r($colors9);


        
        echo "<hr>";
        echo "Task 10<br>";

        $colors10 = array("RED","BLUE", "WHITE","YELLOW");
        $colors10 =array_map('strtolower', $colors10);
        echo "<pre>"; print_r($colors10);

        
        echo "<hr>";
        echo "Task 11<br>";

        for ($i=200; $i <251; $i++){ 
            if ($i%4==0) {
                echo $i.", ";
            }
        }

        // implode(",",range(200,250,4))."<br>"

        
        echo "<hr>";
        echo "Task 12<br>";

        

    ?>
</body>
</html>