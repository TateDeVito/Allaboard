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
	<form action="LendHandler.php" method="post">

	<!-- Cannot be empty -->
	<!-- Drop down should be a list of companies, and then an Other: -->
	Brand <input type="Text" name="brand"><br> 

	<!-- Cannot be empty -->
	Item name <input type="Text" name="item"><br>
	Rent price <input type=number name="rentPrice"><br><br>
	<input type="submit" value="List" name="list"><br>
	</form>	
	</p>
	</center>

</body>
</html>
