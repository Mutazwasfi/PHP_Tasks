<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 31-7</title>
</head>
<body>
    
<?php

echo "Task 1<br>";
$text ="Hello, i'm a banana";
echo strtoupper($text) . "<br>";
echo strtolower($text) . "<br>";
echo ucfirst($text) . "<br>";
echo ucwords($text) . "<br>";

echo "<hr>";
echo "Task 2<br><br>";

$str = '085119';

$hours = substr($str, 0, 2);
$minutes = substr($str, 2, 2);
$seconds = substr($str, 4, 2);

$time = $hours . ':' . $minutes . ':' . $seconds;
echo $time;

echo "<hr>";
echo "Task 3";

?>

</body>
</html>