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
	<form name="list" onsubmit="return validateForm() ;" method="post">
	Brand <input type="Text" name="brand"><br> 
	Item name <input type="Text" name="name"><br>
	Rent price <input type=number name="rentPrice"><br><br>
	<input type="submit" value="List" name="list" onclick="validate()"><br>
	</form>	
	</p>
	</center>

</body>
</html>
