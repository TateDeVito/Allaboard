<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="ALFormat.css">
<body>

<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		require('connectToDb.php');

		// DB format: 
			// userID (varchar 20)
			$userID = 'userID';
			// location (varchar 20)
			$location = 'location';
			// brand (varchar 30)
			$brand = $_POST['brand'];
			// item (varchar 30)
			$item = $_POST['item'];
			// price (varchar 30)
			// the reason for a varchar is for a name your price element
			$price = 0;
			if(!empty($_POST['rent'])) { $price = $_POST['rent']; }
			// photo
			$photo = 0;

		echo "<br><br>Adding a <b>" . $brand . " " . $item; 
		echo "; Price: $" . $price;

		// URLs': 
		// 1.) https://www.w3schools.com/sql/sql_insert.asp
		// 2.) https://www.w3schools.com/php/php_mysql_insert.asp
		// 3.) https://www.zentut.com/php-pdo/pdo-inserting-data-into-tables/

		// "INSERT INTO `DBName` (colq, col2 ...) VALUES ('A', 'B' ...);"
		// If you are using all columns, then you do not need to specify which cols to 
		// pull from.

		$insertItem = "INSERT INTO `$dbname`(userID,area,brand,item,price,photo)
		VALUES('$userID','$location','$brand','$item','$price','$photo')";

		echo "<br><br>"; 

		// To run the queries on a PDO, we use the exec() method
		try {
			$db->exec($insertItem);
			echo 'Successful entry!';
		}

		catch(PDOException $e) { echo 'Oh no!: ' . $e->getMessage(); }

		// When finished, close the connection for security
		$db = null;
	}
?>

</body>
</html>