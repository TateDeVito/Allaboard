<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="ALFormat.css">

<?php
	include 'AL_Head.php';	
?>

<body>

	<center>
	<br>
	<p><b>Search (by brand, name, location) </b><input type="Text" name="search" size="50"><br>
	</p>
	</center>
	
	<!-- List the results of a search directly on the page -->
	<?php
		require('Db/connectToDb.php');

		$query = "SELECT brand,item,price FROM `$dbname`";
		$search = $db->prepare($query);
		$search->execute();

		$resultsArr = $search->fetchAll();

	?>

</body>
</html>