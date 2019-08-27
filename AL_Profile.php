<!DOCTYPE html>
<html>

<header>
<title>Profile</title>
<link rel="stylesheet" type="text/css" href="AL_Format.css">
<?php
	include 'AL_Head.php';
?>
</header>

<body>
	</b></p>
	<form class="forms" name="login" method="post">
	<br><b>Log in</b><br>
	<br>
	Username <input class="twenty" type="text" name="user"><br> 
	Password <input class="twenty" type="password" name="pass"><br>
	<div class="subtext">New?<a style="color: blue" href="signUp.php">Sign up</a></div><br>
	<input class="blackbtn" type="submit" name="submit" value="Log in" onclick="validate()"><br>
	</form>
</body>
</html>