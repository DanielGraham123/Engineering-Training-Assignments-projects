<?php
	
	include ('connection.php');
	error_reporting(0);

	function form() {


		echo "
			<form action='index.php' method='POST'>
				Name: &nbsp;&nbsp;&nbsp;<input type='text' name='fname' required id='formin'><br>
				Email: &nbsp;&nbsp;&nbsp;<input type='email' name='umail' required id='formin'><br>
				Contact:  <input type='text' name='ucon' required id='formin'><br>
				<input type='submit' name='submit' value='Create' id='formbtn'>
			</form>
		";

	}

?>