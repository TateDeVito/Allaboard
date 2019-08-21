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
	
	<!-- List the results of a search directly on the page -->
	<?php
		require('Db/connectToDb.php');

		// Queries should match the entries in the search bar on the page
		$query = "SELECT brand,item,price FROM `$dbname`";
		$search = $db->prepare($query);
		$search->execute();

		$results = $search->fetchAll();

		echo "<br><table>";

		foreach($results as $item) {
			echo '<td style="color:#2bd5ff; padding-left:50px">' 
			. $item['brand'] . '<br>' . $item['item'] . '<br> @ $' . $item['price'] . '</td>';
		}

		echo "</table>";

		// Close connection
		$db = null;
	?>

	</center>

</body>
</html>