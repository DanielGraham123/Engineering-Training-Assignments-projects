<?php

	// require('./include/connection.php');
	error_reporting(0);

	class WebPage{

		private $head;
		private $headId;
		private $image;
		private $menus = array("Home", "Activities", "About", "Contact");
		private $activities = array("Recent-Techs", "Tech Fields", "Online Training");
		private $query;	private $dbpass;
		private $result; private $db;
		private $dbhost; private $userName;
		private $dbuser; private $userEmail;
		private $userComment; private $connection;
		private $fname; private $query2;
		private $lname;
		private $phone;
		private $email;
		private $subject;
		private $message;

		function WebPage($head) {
			$this->head = $head;
		}

		public function header() {
			echo "<div id='header'>
	      <div class='logo'>
	        <a href='#'>$this->head</a>
	      </div>
				";
		}

		public function menu() {
			 echo "<div id='nav'>";

			 foreach ($this->menus as $menu) {
			 	if ($menu == "Activities") {
			 		echo "
			 			<div class='dropdown'>
							<span><a href='#$menu' class='dropbtn' >$menu</a></span>
							<div class='dropdown-content'>";

							foreach ($this->activities as $activity) {
								echo "<a href='index.php?id=$activity' >$activity</a>";
							}
							echo "</div></div>";
			 	} elseif ($menu == "Contact") {
			 		echo "
						<div id='contactbtn'>
							<a href='index.php?id=$menu' id='contact' onclick='changeHeader()'>$menu</a>
						</div>
					";
			 	}	else {
				 	 echo "
				        <a href='index.php?id=$menu'>$menu</a>
				    ";
				}

			 }
			 echo "</div></div>";
		}

		private function sidebar($image) {

			echo "
					<div id='sidebar' style='visibility: hidden;'>
				<h3>You might like this!</h3>


				<p><img src=$image alt='jetman' width='275px' height='200px'></p>

				</div>
			";
		}

		public function mainPage($item) {
			echo "<div id='container'>
							<div id='content' id='contentId'>";

			if ($item == "Home") {
				$this->homeContent();
			} elseif ($item == "About") {
				 echo "
					<div class='aboutfont-title'>
					 	<h3>Who is Tech-House <span style='color: #e3b11c'>?</span></h3>
					</div>
					<hr>
				 ";
				$aboutFile = fopen("./include/about", "r") or exit("Unable to open the file");

				echo "<div class='about-content'>";
				while (!feof($aboutFile)) {
					echo fgets($aboutFile);
				}
				echo "</div>";
				//  form();
			} elseif ($item == "Recent-Techs") {
				 $tech_file = fopen("./include/recent-tech", "r") or exit("Unable to open the file.");

				 echo "<div id='tech-font-title'>
							<h3> The Current Alarming Technologies of 2017 </h3>
							</div>
							<hr id='length'>
				 ";
				 while(!feof($tech_file)) {
					 echo fgets($tech_file);
				 }
				 fclose($tech_file);
			} elseif ($item == "Tech Fields") {
				$field_file = fopen("./include/tech-fields", "r") or exit("Unable to open the file ".$field_file);

					echo "<div id='tech-font-title'>
					  <h3> Technology Fields. </h3>
					  </div>
					  <hr id='length'>
						";
					while(!feof($field_file)) {
						echo fgets($field_file);
					}
					fclose($field_file);

			} elseif ($item == "Online Training") {
					$online_file = fopen("./include/online", "r") or exit("Unable to open the file ". $online_file);

					echo "<div id='tech-font-title'>
							 <h3> Free Career-Advancing Courses You Can Take Online.</h3>
							 </div>
						 	 <hr id='length'>
							 ";
					while(!feof($online_file)) {
						echo fgets($online_file);
					}
					fclose($online_file);
			} elseif ($item == "Contact") {
					// $form_file = fopen("./include/contact.html", "r") or exit("Unable to open the file ". $form_file);
					//
					// while(!feof($form_file)) {
					// 	echo fgets($form_file);
					// }
					// fclose($form_file);

					echo "<div class='block-content'>
									<h2 class='center-align'>Contact Information</h2>
									<hr id='length2'>
									<h3 class='contact-margin'style='color: #070e12;'>Main Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Support Office Address</h3>
									<br>
									<p id='overflow'>14504 Greenview Drive, Suite 415&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;349 South Port Circle</p>
									<br>
									<p>Laurel, MD 20708&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Virginia Beach, VA 23452 									</p><br><br>
									<h3 class='contact-margin' style='color: #070e12';>Phone:</h3><br>
									<p>(MTN) +237 651 523 013</p><br>
									<p>Sales (301)886-8377</p>
									<br><br>
									<hr id='length3'>
									<div class='class-title'>
									Name&nbsp;&nbsp;<span>*</span>
									</div>
<form method='post' action='index.php'>
									<div class='field'>
										<label class='caption'>
										<input class='field-element field-control' name='fname' x-autocompletetype='given-name' spellcheck='false' maxlength='30' data-title='First' type='text'>
										First Name
										</label>
								  </div><br>
									<div class='field'>
										<label class='caption'>
										<input class='field-element field-control' name='lname' x-autocompletetype='surname' spellcheck='false' maxlength='30' data-title='Last' type='text'>
										Last Name
										</label>
									</div>
									<br><br>
									<div class='class-title'>
									Phone&nbsp;&nbsp;<span>*</span>
									</div>
									<div class='field'>
										<label class='caption'>
										<input class='field-element3' name='phone' x-autocompletetype='phone-area-code' spellcheck='false' maxlength='9' data-title='AreaCode' type='text'>
										(#########)
										</label>
									</div>
									<br><br>
									<div class='class-title'>
									Email Address&nbsp;&nbsp;<span>*</span>
									</div>
									<div class='field'>
										<label class='caption'>
										<input class='field-element field-control' name='email' x-autocompletetype='email' spellcheck='false' type='text'>
										</label>
								  </div>

									<br><br>
									<div class='class-title'>
									Subject&nbsp;&nbsp;<span>*</span>
									</div>
									<div class='field'>
										<label class='caption'>
										<input class='field-element field-control' name='subject' type='text'>
										</label>
									</div>

									<br><br>
									<div class='class-title'>
									Message&nbsp;&nbsp;<span>*</span>
									</div>
									<div class='field'>
										<label class='caption'>
										<textarea class='field-element field-control' name='comments' spellcheck='true' type='text'></textarea>
										</label>
								  </div>
								<div class='btn'>
									<input class='button' type='submit' name='submit' value='Submit'/>
								</div>
</form>
								</div>
								";
			}
			echo "</div>";


		}

		public function footer() {
			echo
				"
				<footer class='footer-distributed'>
				  <div class='footer-left'>
					<h3>Graham-<span>Tech</span></h3>
					<p class='footer-links'>
	          <a href='index.php?id=Home'>Home</a>
						·
						<a href='index.php?id=Contact'>Contact</a>
					</p>
					<p class='footer-company-name'>Tech-House &copy; 2017</p>
					<div class='footer-icons'>
						<a href='#'><i class='fa fa-facebook'></i></a>
						<a href='#'><i class='fa fa-linkedin'></i></a>
						<a href='#'><i class='fa fa-yahoo'></i></a>
						<a href='#'><i class='fa fa-github'></i></a>
					</div>
				</div>
				<div class='footer-right'>
					<p>Comment:</p>
					<form action='index.php' method='post'>
						<input type='text' name='name' placeholder='Name' />
						<input type='text' name='email' placeholder='Email' />
						<textarea name='comments' placeholder='Message'></textarea>

						<input type='submit' name='submit' value='Send' id='button' />
					</form>
				</div>

			</footer>
				";

		}
// {$_SERVER['PHP_SELF']}
		protected function homeContent() {
			$images = array("./images/jetman.jpg", "./images/ar&vr.jpeg", "./images/cloud.jpeg");

			echo "
			<div class='height'>
				<div class='font'><h2><br>| Technology is a word that describes something that doesn’t work yet. |<br><br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;| The greatest achievement of humanity is not its works of art, science, or technology, but the recognition of its own dysfunction. |
				</h2>
				</div><br><br>

				<div class='gall1'>
					<div><a href='index.php?id=electrical' data-title='Electrical'><img src='./images/elec.jpeg' alt='elec image'></a></div>
					<div class='desc'>
						<div class='summary'><a class='tialink' href='index.php?id=electrical'>
						Electrical and Electronic Technologies</a></div>
					</div>
				</div>

					<div class='gall2'>
							<div><a href='index.php?id=civil' data-title='Civil'><img src='./images/civil2.jpeg' alt='civil2 image'></a>
							</div>
							<div class='desc'>
								<div class='summary'><a href='index.php?id=civil'>
								Civil Technologies</a>
								</div>
							</div>
					</div>

					<div class='gall3'>
						<div><a href='index.php?id=computer' data-title='Computer'><img src='./images/cpt.jpeg' alt='cpt image'></a></div>
						<div class='desc'>
							<div class='summary'><a class='tialink' href='index.php?id=computer'>
							Computer Technologies</a>
							</div>
						</div>
					</div>";

				foreach ($images as $image) {
						$this->sidebar($image);
				}

			echo "</div>";


		}

		public function message() {
			echo "
				<script type='text/javascript'>

				var contentId = document.getElementById('contentId');

				contentId.innerHTML = '<h3> Well done!</h3>
					<p>Thanks for subscribing</p>';

				</script>
			";

		}

		public function footerHandle() {
			$this->dbhost = "localhost";
			$this->dbuser = "root";
			$this->dbpass = "";
			$this->db = "Tech-house";

			$this->connection = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->db);

			if ($this->connection->connect_error) {
				echo "Unsuccessfull connection";
			}
			else {
				// echo "Successful";
			}

			$this->userName = $_POST['name'];
			$this->userEmail = $_POST['email'];
			$this->userComment = $_POST['comments'];

			if (!$_POST['submit']) {
				  // echo "no submit";
			} else {
				$this->query = "INSERT INTO Accounts(Name, Email, Comment) values('$this->userName', '$this->userEmail', '$this->userComment')";

				if (mysqli_query($this->connection, $this->query)) {
					// $this->message();
					// echo "OK";
					echo "<script type='text/javascript'>alert('Well done!
						Thanks for subscribing');</script>";
				} else {
						echo "<script type='text/javascript'>alert('Something went wrong, please try later');</script>";

				}

		}
	}

	// public function contactHandler() {
	//
	// 	$this->fname = $_POST['fname'];
	// 	$this->lname = $_POST['lname'];
	// 	$this->phone = $_POST['phone'];
	// 	$this->email = $_POST['email'];
	// 	$this->subject = $_POST['subject'];
	// 	$this->comment = $_POST['comments'];
	//
	// 	if(!empty($_POST['contact_submit'])) {
	// 		$this->query2 = "INSERT INTO Contacts(First_name, Last_name, Phone, Email, Subject, Message) values('$this->fname', '$this->lname', '$this->phone', '$this->email', '$this->subject', '$this->message')";
	//
	// 		if(mysqli_query($this->connection, $this->query2)) {
	// 			echo "OK";
	// 		} else {
	// 			echo "Problem";
	// 			// echo "<script type='text/javascript'>alert('Sorry, something went wrong, please try again');</script>";
	// 		}
	//
	// 	} else {
	// 		echo "not OK for the contact";
	// 	}
	// }

	public function slides() {
		echo '
		<h2 class="w3-center">HTML slides</h2>

<div class="w3-content" style="max-width:400px">
<div class="mySlides w3-container w3-red">
	<h1><b>Did You Know?</b></h1>
	<h1><i>We plan to sell trips to the moon in the 2020s</i></h1>
</div>


<div class="mySlides w3-container w3-xlarge w3-white w3-card-4">
	<p><span class="w3-tag w3-yellow">New!</span>
	<p>6 Crystal Glasses</p>
	<p>Only $99 !!!</p>
</div>


</div>
		';
echo "</div>";

	}

}
?>
<!-- <p><img src='./images/affor.jpeg' alt='affor image' width='275px' height='200px'></p>
<h4>Google announced android 7.0</h4>
<p><img src='./images/androidg.jpeg' alt='androidg image' width='275px' height='200px'></p> -->
