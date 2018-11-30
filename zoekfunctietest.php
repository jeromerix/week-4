<?php
	if(isset($_POST['search'])){

$valueToSearch = $_POST['valueToSearch'];
// zoeken uit alle tabellen
// gebruik de CONCAT functie
$query = "SELECT * FROM `gebruikers` WHERE CONCAT(`naam`, `mail`, `titel`, `commentaar`, `timestamp`) LIKE '%".$valueToSearch."%'";
$search_result = filterTable($query);
}
else{
$query ="SELECT * FROM `gebruikers`";
$search_result = filterTable($query);

}

// connect en gebruik de query
function filterTable($query){
$connect = mysqli_connect("localhost", "root", "", "opdr3");
$filter_result = mysqli_query($connect, $query);
return $filter_result;
}

?>