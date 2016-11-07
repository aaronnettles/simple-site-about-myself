<?php
	class Member {
		private $name;

		public function __construct($n) {
			$this->name = $n;
		}

		public function get_name() {
			return $this->name;
		}

		public function top() {
			print '
				<html>
				<head>
					<title>' . $this->get_name() . '</title>
					<!-- comments -->
					<link href="style.css" type="text/css" rel="stylesheet">
				</head>
				<body><div class="float-middle-outer">
					<form action="main.php" method="post">
						<div class="float-middle-inner"><input class="button-nav" type="submit" value="Log Out" name="logout" /></div>
					</form>
				</div>
			';
		}

		public function logout() {
			// end session
			session_destroy();

			// redirect to fresh main page
			print '
				<script>window.location="main.php"</script>
			';
		}

	/********************************************************************************************************************************************/

		public function left_col() {
			print '
				<section class="container">
				<div class="col-a">
				  	
				</div>
			';
		}

		public function middle_col() {
			if(!empty($_POST["logout"])) {
				$this->logout();    
			} else {
				// content
			}
		}

		public function right_col() {
			print '
				<div class="col-c">
				  	
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