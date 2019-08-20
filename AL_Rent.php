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

		// Queries should match the entries in the search bar on the page
		$query = "SELECT brand,item,price FROM `$dbname`";
		$search = $db->prepare($query);
		$search->execute();

		$results = $search->fetchAll();

		echo "<center><table>";

		foreach($results as $item) {
			echo '<td>entry<td>';
		}

		echo "</table></center>";

		// Close connection
		$db = null;
	?>

</body>
</html>