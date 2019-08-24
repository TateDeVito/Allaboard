<!DOCTYPE html>
<html>
<head>
<title>Rentals</title>
<link rel="stylesheet" type="text/css" href="AL_Format.css">
<?php
	include 'AL_Head.php';	
?>
</head>
	<center>
	<form method="POST">
	<p><b>Search (keyword) </b><input otype="textbox" name="search"
	style="height: 30px; font-size: 30px"><br>
	<!-- <input class="blackbtn" type="submit" value="Go"></p> -->
	</form>
	
	<!-- List the results of a search directly on the page -->
	<?php
		// function search() {
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

				// echo "<table style='layout: auto;'>";
				echo '<div class="gallery">';
				foreach($results as $item) {
					echo '<div class="element">' 
					. $item['brand'] . '<br>' . $item['item'] . '<br> @ $' . $item['price'] . '</div>'; 
				}
				echo "</div>";
				}


				catch(PDOException $e) {
					echo "Sorry that didn't work!";
				}

				// Close connection at termination
				$db = null;
				}
			// }
	?>

	</center>

</body>
</html>