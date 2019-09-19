<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbase = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbase);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 echo "Connected successfully";
session_start();
?>