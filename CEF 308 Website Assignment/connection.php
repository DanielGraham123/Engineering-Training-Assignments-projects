<?php


		$host = "localhost";
		$user = "root";
		$password = "";
		$db = "Tech-house";

		$connection = new mysqli($host, $user, $password, $db);

		if ($connection->connect_error) {
			echo "Unsuccessfull connection";
	  } else {
			//  echo "Successfull connection";
			// echo 'Connected... ' . mysqli_get_host_info($connection) . "\n";
		}

		// if (!@mysql_select_db($db, $connection)) {
		// 	echo "Could not connect to ".$db;
		// }


		// $query2 = "select Content from Recent-Tech-Content";
		// $result = $connection->query($query2);
		//
		// if ($result->num_rows > 0) {
		// 	// output data of each row
		// 	while($row = $result->fetch_assoc()) {
		// 		echo $row["Content"];
		// 	}
		// } else {
		// 	echo "0 results";
		// }
		// $connection->close();
?>
