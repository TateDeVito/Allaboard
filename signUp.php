<!DOCTYPE html>
<html>

<header>
<title>Sign up</title>
<link rel="stylesheet" type="text/css" href="AL_Format.css">
<!-- <script type="text/javascript" src="scripts/LoginScript.js"></script> -->
<?php 
	include 'AL_Head.php';
?>
</header>

<body>
<br>
<form class="forms" action="AL_Home.php" onclick="return signInCheck()" method="POST">
First Name: <input class="twenty" type="textbox" id="fName" name="fName">
<!-- Must not be empty -->
Last Name: <input class="twenty" type="textbox" id="lName" name="lName"><br>
<!-- Must not be empty -->
Username: <input class="twenty" type="textbox" id="user" name="user"><br>
<div style="color: red; font-weight: bold" id="userErr"></div>
<!-- Must not be empty -->
<!-- Must not be an existing username -->
Password: <input class="twenty" type="textbox" id="pass" name="pass">
<div style="color: red; font-weight: bold" id="passErr"></div>
<!-- Must be 8-24 characters -->
<!-- To add: Must have at least one number -->
<!-- To add: Must have at least one special character -->
<br>
<div style="color: red; font-weight: bold" id="errorForm"></div>
<br>	
<input class="blackbtn" type="submit" value="Sign up" id="done" onclick="return signInCheck()">
</form>

<script type="text/javascript" src="scripts/LoginScript.js"></script>

</body>
</html>