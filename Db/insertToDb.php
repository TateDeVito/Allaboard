<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		require('connectToDb.php');

		// DB format: 
			// userID (varchar 20)
			$userID = "person";
			// location (varchar 20)
			$location = "location";
			// brand (varchar 30)
			$brand = $_POST['brand'];
			// item (varchar 30)
			$item = $_POST['item'];
			// price (int)
			$price = $_POST['rent'];
			// photo
			$photo = "";

		// $query = "INSERT into equipmentPool('', '')";

	}
?>