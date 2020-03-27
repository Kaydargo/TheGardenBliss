<?php
$servername = "localhost";
$db = "garden";
$username = "root";
$password = "";

// Server database
// $servername = "localhost";
// $db = "glitrash_gardenbliss";
// $username = "glitrash_Kay";
// $password = "GardenBliss20";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>