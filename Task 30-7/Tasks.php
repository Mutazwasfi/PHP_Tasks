<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General</title>
</head>
<body>

<?php

echo "Task 1";
// echo phpinfo();

echo "<hr>";
echo "Task 2";
// echo "Tomorrow I'll learn PHP global variables.<br>";
// echo "This is a bad command: del c:.";

echo "<hr>";

?>

    <p>Task 3</p>
    <h2>Enter your name:</h2>
    <form action="Tasks.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <button type="submit">Submit</button>
    </form>
    <?php
     echo "<br>hello " . $_POST["name"];
     echo "<hr>";

    //  Task 4
    
    echo "Task 4<br><br>";
    $clientIP = $_SERVER['REMOTE_ADDR'];

    echo "Client's IP Address: " . $clientIP;
    echo "<hr>";

    //  Task 5

    echo "Task 5<br><br>";
    $currentFileName = basename($_SERVER['PHP_SELF']);

    echo "Current file name: " . $currentFileName;
    echo "<hr>";

    //  Task 6
    echo "Task 6<br><br>";
    $url = 'https://www.w3schools.com/php/default.asp';

    // Parse the URL to get its components
    $parsedUrl = parse_url($url);

    // Extract the components
    $scheme = $parsedUrl['scheme']; // e.g., "https"
    $host = $parsedUrl['host']; // e.g., "www.w3schools.com"
    $path = $parsedUrl['path']; // e.g., "/php/default.asp"

    // Print the components
    echo "Scheme: " . $scheme . "<br>";
    echo "Host: " . $host . "<br>";
    echo "Path: " . $path . "<br>";

    echo "<hr>";

    //  Task 7

    echo "Task 7<br><br>";


    ?>
    
</body>
</html>

