<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "opdr3";

$conn = new mysqli($servername, $username, $password, $dbname);

	if($conn->connect_error){
die("Conection Failed: " .$conn->connect_error);
}

	if (isset($_POST['name'])) {	
$name =  $_POST["name"];

//check of het al in de database staat
$check_duplicate_name = "SELECT name FROM categories
WHERE name = '$name'";
$result = mysqli_query($conn, $check_duplicate_name);

$count = mysqli_num_rows($result);
	if($count > 0){
echo "<h1>already there!</h1>";
echo"<a href='addcatagoryinput.php'>back</a>";
return false;
}

$sql = "INSERT INTO `categories`(`id`, `name`)
VALUES (`id`,'$name')";
$result=mysqli_query($conn, $sql);
	if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
} 
echo"added!";
echo"<a href='addcatagoryinput.php'>back</a>";
}


mysqli_close($conn);   



?>