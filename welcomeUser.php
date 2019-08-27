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
        // Table: users 
			// userID (varchar 20) - primary key
			$userID = $_POST['user'];
			// pass (varchar 20)
            $pass = $_POST['pass'];
			// fname (varchar 30)
			$fname = $_POST['fname'];
			// lname (varchar 30)
            $lname = $_POST['lname'];
            // area (varchar 30)
            $area = '';

		// URLs': 
		// 1.) https://www.w3schools.com/sql/sql_insert.asp
		// 2.) https://www.w3schools.com/php/php_mysql_insert.asp
		// 3.) https://www.zentut.com/php-pdo/pdo-inserting-data-into-tables/

		// "INSERT INTO `DBName` (colq, col2 ...) VALUES ('A', 'B' ...);"
		// If you are using all columns, then you do not need to specify which cols to 
		// pull from.

		$newuser = "INSERT INTO `users`(userID,pass,fname,lname,area)
		VALUES('$userID', '$pass', '$fname', '$lname', '$area')";

		echo "<br><br>"; 

		// To run the queries on a PDO, we use the exec() method
		try {
			$db->exec($newuser);
			echo '<b>Successfully added user.</b>';
			echo '<br><br>Welcome <b>' . $userID . '</b>!';
		}

		catch(PDOException $e) { echo 'Oh no!: ' . $e->getMessage(); }

		// When finished, close the connection for security
		$db = null;
	}

	echo '</body>';
    echo '</html>';
    
    // SET UP A STATE SO THAT YOU CAN RECORD THE USER INFO

?>

<br><br>
<input class="bigbluebtn" type="submit" value="Take me home" onclick="window.location.replace('AL_Home.php')">

</center>
</body>
</html>