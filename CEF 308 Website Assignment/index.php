<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
<link rel="stylesheet" type="text/css" href="./css/indexStyle.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<script type="text/javascript">
	function changeHeader() {
		// document.getElementsByClassName("dropmenu").onclick = function() {
		document.getElementById("contact").onclick = function() {
			document.getElementById("header").style.backgroundColor="green";
		};
		// }
		// };
	}

	// window.onload = changeHeader;
</script>
</head>
<body>
	<?php
		require('./include/indexFunction.php');

		$caller = new WebPage("Tech-House");

		if(empty($_GET['id'])) {
			$caller->header();
			$caller->menu();
			$caller->mainPage("Home");
			$caller->footerHandle();
			$caller->footer();
		} else {
			$id = $_GET['id'];

			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$db = "Tech-house";

			$connection = new mysqli($dbhost, $dbuser, $dbpass, $db);

			if ($connection->connect_error) {
				echo "Unsuccessfull connection";
			}
			else {
				// echo "Successful";
			}

			$caller->header();
			$caller->menu();
			// $caller->sidebar();
			$caller->mainPage($id);
			// $caller->sidebar();
			$caller->footerHandle();
			$caller->footer();


			// $userName = $_POST['name'];
			// $userEmail = $_POST['email'];
			// $userComment = $_POST['comments'];
			//
			// if (!$_POST['submit']) {
			// 	  echo "no submit";
			// } else {
			// 	$query = "INSERT INTO Accounts(Name, Email, Comment) values('$userName', '$userEmail', '$userComment')";
			//
			//
			// 	if(mysqli_query($connection, $query)) {
			// 				echo "OK";
			// 	} else {
			// 		echo "Problem";
			// 	}
			// 	if (mysqli_query($connection, $query)) {
			// 		// $caller->message();
			// 		echo "OK";
			// 		// echo "<script type='text/javascript'>alert('Well done!
			// 		// 	Thanks for subscribing');</script>";
			// 	} else {
			// 		echo "<script type='text/javascript'>alert('Something went wrong, please try later\n$mysqli->query($query)');</script>";
			//
			// 	}

				// $fname = $_POST['fname'];
				// $lname = $_POST['lname'];
				// $phone = $_POST['phone'];
				// $email = $_POST['email2'];
				// $subject = $_POST['subject'];
				// $message = $_POST['message'];
				//
				// if($_POST['submit2']) {
				// 	$query2 = "insert into Contacts(First_name, Last_name, Phone, Email, Subject, Message) values('$fname', '$lname', '$phone', '$email', '$subject', '$message')";
				//
				// 	if(mysqli_query($connection, $query2)) {
				// 		echo "OK";
				// 	} else {
				// 		echo "<script type='text/javascript'>alert('Sorry, something went wrong, please try again');</script>";
				// 	}
				//
				// } else {
				// 	echo "hmmmmmmmmmmmmmmmmmmmmmmmmm";
				// }
				//



		}
	 ?>

<script type="text/javascript" src="script.js"></script>
</body>
</html>
