<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="ALFormat.css">
<head>

<?php 
	include 'AL_Head.php';
?>

</head>

<body>

	<center>
	<p><b>Fill out item info below to add equipment:</b><br>

	<form onsubmit="itemCheck()" method="post" >
	<!-- Neither brand nor item can be empty -->
	<!-- Drop down should be a list of companies, and then an Other: -->
	Brand: <input type="Text" id="brand"><br>
	Item name: <input type="Text" id="item"><br>
	Rental price ($): <input type="number" value=20 id="rentPrice"><br>
	<br> Photos upload: 
	<b><p style='color : red' id="error"></p></b>	
	<input type="submit" value="List my item" id="list" onclick = "return itemCheck()">
	</form>	
	</p>
	</center>

	<!-- If the form successfully makes it through the validation form -->
	<!-- Then the newly listed items will be put into a database of listed items -->
	<!-- Else, flags are given on the page indicating what must be filled out -->
	<script type="text/javascript" src="scripts/LendScript.js"></script>

	<?php
		require('DB/connectToDb.php');

		if($_SERVER[REQUEST_METHOD] == 'POST') {
		
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

</body>
</html>