 <?php

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "opdr3";

// connect to database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `categories`";


$result1 = mysqli_query($connect, $query);  
?>