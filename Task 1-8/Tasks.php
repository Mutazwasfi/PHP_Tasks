<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1-8</title>
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
        print_r($fruits) . "<br>";


    ?>
</body>
</html>