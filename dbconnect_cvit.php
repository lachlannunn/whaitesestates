<?php

$servername = "db730114064.db.1and1.com";
$username = "dbo730114064";
$password = "AdvancedWebSandPit2020";
$dbase = "db730114064";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbase);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
?>