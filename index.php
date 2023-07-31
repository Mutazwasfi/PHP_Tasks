<!DOCTYPE html>
<html>
<body>




<?php


echo '<br>';

echo "------------------ gettype function : -------------------  <br>";
$a = 3;
echo gettype($a) . "<br>";

$b = 3.2;
echo gettype($b) . "<br>";

$c = "Hello";
echo gettype($c) . "<br>";

$d = array();
echo gettype($d) . "<br>";

$e = array("red", "green", "blue");
echo gettype($e) . "<br>";

$f = NULL;
echo gettype($f) . "<br>";

$g = false;
echo gettype($g) . "<br>";


echo '<br>';
echo '<br>';



echo "------------------ intval function : -------------------  <br>";

$a = 32;
echo intval($a) . "<br>";

$b = 3.2;
echo intval($b) . "<br>";

$c = "32.5";
echo intval($c) . "<br>";

$d = array();
echo intval($d) . "<br>";

$e = array("red", "green", "blue");
echo intval($e);

echo '<br>';
echo '<br>';



echo "------------------ var_dump : -------------------  <br>";

$x = "5555";

$y = 10 ;

var_dump($x);

echo '<br>';

var_dump($y);

echo '<br>';

$a = 10.365;

var_dump(is_int($a));




echo '<br>';
echo '<br>';


echo "------------------ strpos : -------------------  <br>";


echo strpos("Hello world!" , "world");


echo '<br>';
echo '<br>';


echo "------------------ strlen : -------------------  <br>";


$string = "hello";

echo strlen($string);

echo '<br>';
echo '<br>';


echo "------------------ array length : -------------------  <br>";

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

echo '<br>';
echo '<br>';


echo "------------------ in_array : -------------------  <br>";

echo '<br>';
echo '<br>';

$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }