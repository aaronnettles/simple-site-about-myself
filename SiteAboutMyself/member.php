<?php

// visitor class
class Member {
	private $name;

	public function __construct($n) {
		$this->name = $n;
	}

	public function get_name() {
		return $this->name;
	}

	public function head() {
		print '
			<html>
			<head>
				<title>' . $this->get_name() . '</title>
				<!-- comments -->
				<link href="style.css" type="text/css" rel="stylesheet">
			</head>
			<body>
			<nav>
				<ul>
					<li class="float-left">
						<a href="member_home.php">' . $this->get_name() . '</a>
					</li>
                    <li class="float-right" style="margin-right: 2rem;">
						<a href="member_exit.php">Exit</a>
					</li>
				</ul>
			</nav>
			<section class="float-left">
		';
	}

	public function left_top_links() {
		print '
			<div class="col-2 float-left">
				<img src="karanak_02.png">
				<div align="center">
					Games<br /><br />
					<form action="member_games.php" method="post">
					    <input type="submit" value="Guess The Word" name="guess_the_word" id="guess_the_word"><br /><br />
					    <input type="submit" value="Ball Buster" name="ball_buster" id="ball_buster">
					</form>
				</div>
			<br /><br />
			</div>
		';
	}

	public function center_content($content) {
		print '
			<div class="col-4 float-left">
		';

		print $content;

		print '
				<div><br /><br /></div>
			</div>
		';
	}

	public function right_bottom_links() {
		print '
			<div class="col-2 float-left" align="center">
				<br /><a href="member_files.php">Personal Files</a>
				<br /><br />
				<br />Calculator<br /><br />
				<div align="center">
				    <script type="text/javascript">
				        function calculation() {
				        	var i = document.find_result.input.value;
				        	var r = eval(i);
				            document.getElementById("calculation_result").value = r;
				        }
			        </script>
			        <form name="find_result">
				        <input type="text" name="input" value="" />
				        <input type="button" name="equals_button" value="=" onclick="calculation()" />
				        <input type="text" id="calculation_result" name="calculation_result" value="" />
				    </form>
				</div>
				<br /><br />
			</div>
		';
	}

	public function foot() {
		print '
				</section>
			</body>
			</html>
		';
	}

	public function main($content) {
		$this->head();
		$this->left_top_links();
		$this->center_content($content);
		$this->right_bottom_links();
		$this->foot();
	}
}

?>