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

$str2 = '085119';

$hours = substr($str, 0, 2);
$minutes = substr($str, 2, 2);
$seconds = substr($str, 4, 2);

$time = $hours . ':' . $minutes . ':' . $seconds;
echo $time;

echo "<hr>";
echo "Task 3.<br>";

$t3text = "I am a full stack developer at orange coding academy";

if(in_array("orange", $t3text))
{
    echo "Word Found";
}
else
{
    echo "No Match";
}


echo "<hr>";
echo "Task 4.<br>";

$path = 'www.orange.com/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."'www.orange.com/index.php'"; 


echo "<hr>";
echo "Task 5.<br>";

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."<br>";

echo "<hr>";
echo "Task 11.<br>";
  
  $cha = 'a';
  $next_cha = ++$cha; 

if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."<br>";

echo "<hr>";
echo "Task 12.<br>";

$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."<br>";

echo "<hr>";
echo "Task 13.<br>";
$x13 = '000547023.24';
$str13 = ltrim($x12, '0');
echo $str13."<br>";

echo "<hr>";
echo "Task 14.<br>";
$str14 = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $str14)."<br>";

echo "<hr>";
echo "Task 15.<br>";

$str15 = 'The quick brown fox jumps over the lazy dog---';
echo rtrim($str15, '-')."<br>";

echo "<hr>";
echo "Task 16.<br>";

$str16 = '\"\1+2/3*2:2-3/4*3'
$string = preg_replace('/[^A-Za-z0-9\-]/', '', $str16);
echo $str16 . "<br>";

echo "<hr>";
echo "Task 17.<br>";

$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."<br>";

echo "<hr>";
echo "Task 18.<br>";

$str18 = "2,543.12";
$x18 = str_replace( ',', '', $str18);
if( is_numeric($x18))

  {
  echo $x18."<br>";
  }

  echo "<hr>";
  echo "Task 19.<br>";

  foreach (range('A', 'Z') as $char) {
    echo $char;
}

?>




</body>
</html>