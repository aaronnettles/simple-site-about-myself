<?php

// function to determine if name and password pair are valid
function is_valid_member($n, $p) {
	$v = 0;

	$members = array(
		array("Matthew", "pass"),
		array("Aaron", "pass"),
		array("Justin", "pass"),
		array("CJ", "pass")
	);

	for($i = 0; $i < count($members); ++$i) {
		if($n == $members[$i][0] && $p == $members[$i][1]) {
			$v = 1;
			$i = count($members);
		}
	}

	return $v;
}

// visitor class
class Visitor {

	public function head() {
		print '
			<html>
			<head>
				<title>Visitor</title>
				<!-- comments -->
				<link href="style.css" type="text/css" rel="stylesheet">
			</head>
			<body>
			<nav>
				<ul>
					<li class="float-left">
						<a href="visitor_home.php">COOKS</a>
					</li>
                    <li class="float-right" style="margin-right: 2rem;">
						<a href="visitor_member_entrance.php">Enter</a>
					</li>
                    <li class="float-right">
                        <a href="visitor_contact.php">Contact</a>
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
			</div>
			<div><br /><br /></div>
		';
	}

	public function center_content($content) {
		print '
			<div class="col-4 float-left">
		';

		print $content;

		print '
			<br /><br />
			</div>
		';
	}

	public function right_bottom_links() {
		print '
			<div class="col-2 float-left" align="center">
			  	<br />Links<br /><br />
			    <a href="http://en.cppreference.com/w/">C++ Reference</a><br /><br />
			    <a href="http://stackexchange.com">Stack Exchange</a><br /><br />
				<br /><br />
				Calculator<br /><br />
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
				<br /><br />
				Google Search<br /><br />
		    	<form action="https://www.google.com/search" method="get">
					<input type="text" name="q" value="" />
					<input type="submit" value="send" />
				</form>
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