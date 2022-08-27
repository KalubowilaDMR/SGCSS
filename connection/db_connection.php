<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "sgcss";

// creat database connection
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

//check database connection
if(!$conn){
    die("Database connect unsuccessfully" . mysqli_connect_error());
}


?>