<?php

require_once("visitor.php");

// member entrance form
$content = '
	<div align="center">
		<br />Members Area Entrance<br /><br />
  		<form action="visitor_member_entrance.php" method="post">
        	<label>Name</label>
			<input type="text" name="name"><br /><br />
			<label>Password</label>
			<input type="password" name="pass"><br /><br />
			<input type="submit" value="Enter">
			<input type="reset" value="Reset">
      	</form>
    </div>
';

// if name and password pair are valid, create session variable
if(!empty($_POST["name"]) && !empty($_POST["pass"])) {
	$name = $_POST["name"];
	$pass = $_POST["pass"];

	if(is_valid_member($name, $pass) == 1) {
		session_start();

		$_SESSION["valid_member"] = $name;
		
		$content .= '<script>window.location.assign("member_home.php")</script>';
	}
}

$visitor = new Visitor();
$visitor->main($content);

?>