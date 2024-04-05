<?php
	$connection = new mysqli('localhost', 'root', '', 'dbgonzalezf2');
	if (!$connection) {
		die (mysqli_error($mysqli));
	}
?>