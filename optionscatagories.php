<html>
<?php include 'optionscatagorieconnect.php' ?>
    <head>

        <title> Option select from database</title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        
        <!-- select options -->
		<select>

            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>

            <?php endwhile;?>

        </select>

    </body>

</html>