<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		if(!empty($_POST['brand']) && !empty($_POST['item'])){
			$brand = $_POST['brand'];
            $item = $_POST['item'];
		}

		// else {
		// 	$_POST['error'].textContent = 'Error';
		// }
	}
?>