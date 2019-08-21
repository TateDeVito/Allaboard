<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="AL_Format.css">
<head>
<!-- <script type="text/javascript" src="scripts/LendScript.js"></script> -->

<?php 
	include 'AL_Head.php';
?>

</head>

<body>

	<div class="forms"><b>Fill out item info below to add equipment:</b></div>

	<form class="forms" action="insertToDb.php" onclick="return itemCheck()" method="POST">
	<!-- Neither brand nor item can be empty -->
	<!-- Drop down should be a list of companies, and then an Other: -->

	<!-- Should align this within the page -->
	Brand: <input class="twenty" type="textbox" id="brand" name="brand"><br>
	Item name: <input class="twenty" type="textbox" id="item" name="item"><br>
	Rental price ($): <input class="twenty" type="number" value=20 id="rent" name="rent"><br>
	Photos upload: 	<!-- To add in -->
	<b><p style='color : red' id="error"></p></b>	
	<!-- Button triggers JavaScript form validation -->
	<input class="blackbtn" type="submit" value="List my item" id="list" onclick="return itemCheck()">
	</form>	

	</p>

	<!-- If the form successfully makes it through the validation form -->
	<!-- Then the newly listed items will be put into a database of listed items -->
	<!-- Else, flags are given on the page indicating what must be filled out -->
	<script type="text/javascript" src="scripts/LendScript.js"></script>

</body>
</html>