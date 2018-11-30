<!DOCTYPE html>
<html>
<?php include 'opvragenuitdb.php';?>
<?php include 'optionscatagorieconnect.php' ?>
	<head>
	<title> invoegen</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
<!------------- form om te posten ----------->
<form action="inser.php" method="post">
name:	<br> <input type="text" name="naam" value="name"><br>
title:	<br> <input type="text" name="titel" value="title"><br>
comment:<br> <textarea placeholder="comment" name="commentaar" value="commentaar"></textarea><br>
<!------------- options  category------------>
category:<br>
<select  name="option">
	<?php while($row1 = mysqli_fetch_array($result1)):;?>
	<option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
	<?php endwhile;?>
</select>
	<br><input type="submit" value="Submit">
 <a href="addcatagoryinput.php">add category</a> <a href="datafiltersearch.php">go to search</a>
</form>
</body>
</html>



    

        
