<?php

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "Tech-house";

	$connection = new mysqli($dbhost, $dbuser, $dbpass, $db);

	if ($connection->connect_error) {
		echo "Unsuccessfull connection";
	}
	else {
		echo "Successful";
	}

?>
