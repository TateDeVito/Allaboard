<!DOCTYPE html>
<html>

<header>
<title>Lending</title>
<link rel="stylesheet" type="text/css" href="AL_Format.css">
<script type="text/javascript" src="scripts/LendScript.js"></script>
<?php 
	include 'AL_Head.php';
?>
</header>

<body>

	<div class="forms"><b>Fill out item info below to add equipment:</b></div>

	<form class="forms" action="insertToDb.php" onsubmit="return itemCheck()" method="POST">
	<!-- Neither brand nor item can be empty -->
	<!-- Drop down should be a list of companies, and then an Other: -->

	<!-- Should align this within the page -->
	Type of equipment: 
	<select onchange="other()" class="twenty" style="height: 30px; margin-bottom: 15px" id="sport" name="sport">
	<option></option>
	<option>Ski</option><option>Snowboard</option>
	<option>Surf</option><option>Other</option>
	</select><br>
	<div class="subtext" id="ifOther" name="ifOther"></div>

	<script> 
		var sport = document.getElementById('sport');	
		// Javascript function to put in items that are of nontraditional types 
		function other() {
			if(sport.value == 'Other') { document.getElementById('ifOther').innerHTML = 
			'<i>Type sport here: <input class="twenty" id="other" name="other"></i><br>'; }
			else { document.getElementById('ifOther').innerHTML = ''; }
		} 
	</script>

	<!-- If other - input to the right -->
	Brand: <input class="twenty" type="textbox" id="brand" name="brand"><br>
	Item name: <input class="twenty" type="textbox" id="item" name="item"><br>
	Rental price ($): <input class="twenty" type="number" value=20 id="rent" name="rent">
	Not sure... <input onchange="namePrice()" style="height: 25px; width: 25px" type="checkbox" id="unknownBox"
	name="unknownBox"><br>
	<div class="subtext" id="noPrice" name="noPrice"></div>

	<script> 
		var unknownBox = document.getElementById('unknownBox');	
		// Javascript function to put in items that are of nontraditional types 
		function namePrice() {
			if(unknownBox.checked) { document.getElementById('noPrice').innerHTML = 
			'<i>We will help you find a price!</i><br>'; }
			else { document.getElementById('noPrice').innerHTML = ''; }
		} 
	</script>

	<!-- Users add a photo here  -->
	<!-- Although currently works as a submit... -->
	Photos: <input type="image" id="pic" name="pic">	
	<br>
	<p class="error" style="color: red; font-weight: bold" id="error"></p>	
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