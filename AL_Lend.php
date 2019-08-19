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

	<form onchange="itemCheck()" method="post" >
	<!-- Neither brand nor item can be empty -->
	<!-- Drop down should be a list of companies, and then an Other: -->
	Brand <input onchange="itemCheck()" type="Text" id="brand"><br>
	Item name <input type="Text" id="item"><br>
	Rental price ($) <input type="number" value=20 id="rentPrice">
	<b><p style='color : red' id="error"></p></b>	
	<input type="submit" value="List my item" name="list" onsubmit = " return itemCheck()">
	</form>	
	</p>
	</center>

	<script type="text/javascript" src="scripts/LendScript.js"></script>
</body>
</html>
