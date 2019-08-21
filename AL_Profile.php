<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="AL_Format.css">
<?php
	include 'AL_Head.php';
	
?>
<body>
	</b></p>
	<center>
	<br><b>Log in</b><br>
	<form name="login" onsubmit="return validateForm() ;" method="post">
	<br>
	Username <input class="username" type="text" name="user"></input><br> 
	Password <input class="password" type="password" name="pass"></input><br><br>	
	<input class="blackbtn" type="submit" name="submit" value="Log in" onclick="validate()">
	</form>
	<br><b><a href="AL_NewMemb.html">New here?</a></b><br> 
	</center>
</body>
</html>