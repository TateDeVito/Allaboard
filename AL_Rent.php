<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="ALFormat.css">

<?php
	include 'AL_Head.php';	
?>

<body>
	<center>
	<br>
	<form method="POST">
	<p><b>Search (by brand or item name) </b><input type="textbox" name="search" size="50">
	<input type="submit" value="search"></p>
	
	<!-- List the results of a search directly on the page -->
	<?php
		require('Db/connectToDb.php');

		if($_SERVER['REQUEST_METHOD'] == 'POST') { 

			$search = $_POST['search'];

			// Queries should match the entries in the search bar on the page
			$query = "SELECT brand, item, price FROM `$dbname`
			WHERE brand='$search' or item='$search'";

			$search = $db->prepare($query);
			$search->execute();
			$results = $search->fetchAll();

			echo "<br><table>";
			foreach($results as $item) {
				echo '<td style="background-color:#2bd5ff; border-width: 5px; text-align: center;
				padding: 15px">' 
				. $item['brand'] . '<br>' . $item['item'] . '<br> @ $' . $item['price'] . '</td>'; }
			echo "</table>";

			// Close connection
			$db = null;
		}
	?>

	</center>

</body>
</html>