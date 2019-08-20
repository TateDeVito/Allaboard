<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		require('connectToDb.php');

		$db = 'equipmentPool';

		// DB format: 
			// userID (varchar 20)
			$userID = "person";
			// location (varchar 20)
			$location = "location";
			// brand (varchar 30)
			$brand = $_POST['brand'];
			// item (varchar 30)
			$item = $_POST['item'];
			// price (varchar 30)
			// the reason for a varchar is for a name your price element
			$price = "???";
			if(!empty($_POST['rent'])) { $price = $_POST['rent']; }
			// photo
			$photo = "";

		echo "<br><br>Adding a <b>" . $brand . " " . $item; 
		echo "; Price: $" . $price;

		$query = "INSERT INTO `equipmentPool`('userID','location','brand','item','price','photo')
		VALUES($userID, $location, $brand, $item, $price, $photo)";

	}
?>