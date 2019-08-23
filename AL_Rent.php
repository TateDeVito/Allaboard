<!DOCTYPE html>
<html>

<head>
<title>Rentals</title>
<link rel="stylesheet" type="text/css" href="AL_Format.css">
<?php
	include 'AL_Head.php';	
?>
</head>

<body>
	<center>
	<form width=90% method="POST">
	<p><b>Search (by brand or item name) </b><input type="textbox" name="search" size="50"
	style="height: 30px; font-size: 30px"><br>
	<input class="blackbtn" type="submit" value="Go"></p>
	
	<!-- List the results of a search directly on the page -->
	<?php
		require('Db/connectToDb.php');

		if($_SERVER['REQUEST_METHOD'] == 'POST') { 

			$search = $_POST['search'];

			try {
			// Queries should match the entries in the search bar on the page
			$query = "SELECT brand, item, price FROM `$dbname`
			WHERE brand='$search' or item='$search'";

			$search = $db->prepare($query);
			$search->execute();
			$results = $search->fetchAll();

			echo "<table width=70% style='overflow-x: auto'>";
			foreach($results as $item) {
				echo '<td class="twenty">' 
				. $item['brand'] . '<br>' . $item['item'] . '<br> @ $' . $item['price'] . '</td>'; }
			echo "</table>";
			}

			catch(PDOException $e) {
				echo "Sorry that didn't work!";
			}

			// Close connection at termination
			$db = null;
		}
	?>

	</center>

</body>
</html>