<?php


if (strpos($_SERVER['HTTP_HOST'], 'lhost') >0 || strpos($_SERVER['HTTP_HOST'], '92.168') >0 ){
//echo '<p>host localhost......</p>';
$servername = "localhost";
$username = "root";
$password = "";
$dbase = "whaitesestates";

}else if (strpos($_SERVER['HTTP_HOST'], 'it.info') >0){
//echo '<p>host cvit........</p>';
$servername = "db730114064.db.1and1.com";
$username = "dbo730114064";
$password = "AdvancedWebSandPit2020";
$dbase = "db730114064";

}else{
echo '<p>host unknown ??????</p>';

}

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbase);

//Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

session_start();
?>