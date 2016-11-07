<?php
	
	// determine if name and password pair are valid
	function is_valid_member($n, $p) {
		$v = 0;

		if($n == "gnome" && $p == "pass") {
			$v = 1;
		}

		return $v;
	}

	// visitor class
	class Visitor {
		public function top() {
			print '
				<html>
				<head>
					<title>Visitor</title>
					<!-- comments -->
					<link href="style.css" type="text/css" rel="stylesheet">
				</head>
				<body>
				<div class="float-middle-outer">
					<form action="main.php" method="post">
						<div class="float-middle-inner"><input class="button-nav" type="submit" value="Home" name="home" /></div>
						<div class="float-middle-inner"><input class="button-nav" type="submit" value="Contact" name="contact" /></div>
						<div class="float-middle-inner"><input class="button-nav" type="submit" value="Members" name="members" /></div>
					</form>
				</div>
			';
		}

		// basic about page
		public function home() {
			print '
				<div class="col-b">
				  	<p style="width: 90%;">
				  	Gnomes!
				    </p>
				</div>
			';
		}

		// contact form
		public function contact() {
			print '
				<div class="col-b">
				  	<p style="width: 90%;">
				  	Contact!
				    </p>
				</div>
			';
		}

		// member access form
		public function members() {
			print '
				<div class="col-b">
					<form action="main.php" method="post">
						<p style="width: 90%;">
							<label>Name</label>
							<input type="text" name="name">
							<label>Password</label>
							<input type="password" name="pass">
							<input type="submit" value="Login">
							<input type="reset" value="Reset">
						</p>
					</form>
				</div>
			';
		}

	/********************************************************************************************************************************************/

		public function left_col() {
			print '
				<section class="container">
				<div class="col-a">
				  	<ul><br />
				  		<li>The Team</li><br />
					    <li><a href="http://ada.cameron.edu/~an908277/AboutAaron.html">Aaron "Nasty" Nettles</a></li><br />
					    <li><a href="Mediocre/home.html">Matthew "Mediocre" Hunt</a></li><br />
					    <li><a href="http://ada.cameron.edu/~js923199/Myhome.html">Justin "Jester" Smith</a></li><br />
					    <li><a href="http://ada.cameron.edu/~cj913521/index.html">Chris "Ace" Jones</a></li><br />
				    </ul>
				</div>
			';
		}

		public function middle_col() {
			if(!empty($_POST["contact"])) {
				$this->contact();    
			} elseif(!empty($_POST["members"])) { 
				$this->members();
			} else {
				$this->home();
			}
		}

		public function right_col() {
			print '
				<div class="col-c">
				  	<ul><br />
				  		<li>Links</li><br />
					    <li><a href="http://thehappygnome.com">The Happy Gnome</a></li><br />
					    <li><a href="https://en.wikipedia.org/wiki/The_World_of_David_the_Gnome">David the Gnome</a></li><br />
					</ul>
				</div>
			';
		}

		public function bottom() {
			print '
				</body>
				</html>
			';
		}

		public function main() {
			$this->top();
			$this->left_col();
			$this->middle_col();
			$this->right_col();
			$this->bottom();
		}
	}
?>