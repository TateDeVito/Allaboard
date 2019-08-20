<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		require('connectToDb.php');

		// DB format: 
			// userID (varchar 20)
			// location (varchar 20)
			// brand (varchar 30)
			// item (varchar 30)
			// price (int)
			// photo

		// $query = "INSERT into equipmentPool('', '')";

	}
?>