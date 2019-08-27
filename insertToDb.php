<!DOCTYPE html>
<html>

<header>
<title>Equipment submissions</title>
<link rel="stylesheet" type="text/css" href="AL_Format.css">
</header>

<body>
<center>

<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		require('Db/connectToDb.php');

		// DB format: 
			// userID (varchar 20)
			$userID = 'userID';
			// location (varchar 20)
			$location = 'location';
			// brand (varchar 30)
			$brand = $_POST['brand'];
			// item (varchar 30)
			$item = $_POST['item'];
			// type (varchar 30)
			$sport = $_POST['sport'];
			if($sport == "Other") { $sport = $_POST['other']; }			
			// price (varchar 30)
			// the reason for a varchar is for a name your price element
			$price = 0;
			if(!empty($_POST['rent'])) { $price = $_POST['rent']; }
			if($_POST['unknownBox']) { $price = "unknown"; }
			// photo
			$photo = 0;

		echo "<br><br>Attempting lend...";

		// URLs': 
		// 1.) https://www.w3schools.com/sql/sql_insert.asp
		// 2.) https://www.w3schools.com/php/php_mysql_insert.asp
		// 3.) https://www.zentut.com/php-pdo/pdo-inserting-data-into-tables/

		// "INSERT INTO `DBName` (colq, col2 ...) VALUES ('A', 'B' ...);"
		// If you are using all columns, then you do not need to specify which cols to 
		// pull from.

		$insertItem = "INSERT INTO `$dbname`(userID,area,brand,item,sport,price,photo)
		VALUES('$userID','$location','$brand','$item','$sport','$price','$photo')";

		echo "<br><br>"; 

		// To run the queries on a PDO, we use the exec() method
		try {
			$db->exec($insertItem);
			echo '<b>Successfully added a(n) ' . $brand . " " . $item . " to equipment pool.</b>";
			echo '<br><br>Thank you for your submission!';
		}

		catch(PDOException $e) { echo 'Oh no!: ' . $e->getMessage(); }

		// When finished, close the connection for security
		$db = null;
	}

	echo '</body>';
	echo '</html>';
?>

<br><br>
<input class="bigbluebtn" type="submit" value="Take me home" onclick="window.location.replace('AL_Home.php')">

</center>
</body>
</html>