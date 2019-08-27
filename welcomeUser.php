<!DOCTYPE html>
<html>

<header>
<title>Welcome!</title>
<link rel="stylesheet" type="text/css" href="AL_Format.css">
</header>

<body>
<center>

<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		require('Db/connectToDb.php');
        // DB format: 
        // dbname: users 
			// userID (varchar 20) - primary key
			$userID = '';
			// password (varchar 20)
            $password = '';
			// fname (varchar 30)
			$fname = '';
			// lname (varchar 30)
            $lname = '';
            // location?
            // $location = '';

		// URLs': 
		// 1.) https://www.w3schools.com/sql/sql_insert.asp
		// 2.) https://www.w3schools.com/php/php_mysql_insert.asp
		// 3.) https://www.zentut.com/php-pdo/pdo-inserting-data-into-tables/

		// "INSERT INTO `DBName` (colq, col2 ...) VALUES ('A', 'B' ...);"
		// If you are using all columns, then you do not need to specify which cols to 
		// pull from.

		$newuser = "INSERT INTO `$dbname`(userID,area,brand,item,sport,price,photo)
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