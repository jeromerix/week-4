<html>
<head>
<?php include('zoekfunctietest.php');?>
</head>
<body>
<form action="datafiltersearch.php" method="post">
<input type="text" name="valueToSearch" placeholder="search"><br>
<input type="submit" name="search" value="filter"><br><a href='invoegenopdr3.php'>back</a>

<table>
	<tr>
		<th>naam</th>
		<th>mail</th>
		<th>titel</th>
		<th>commentaar</th>
		<th>timestamp</th>
	</tr>
<?php while($row = mysqli_fetch_array($search_result)):?>
	<tr>
	<td><?php echo $row['naam'];?></td>
	<td><?php echo $row['mail'];?></td>
	<td><?php echo $row['titel'];?></td>
	<td><?php echo $row['commentaar'];?></td>
	<td><?php echo $row['timestamp'];?></td>
	</tr>
<?php endwhile;?>
</table>
</form>
</body>
</html> 