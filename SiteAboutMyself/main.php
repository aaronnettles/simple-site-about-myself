<?php
	require_once("members.php");
	require_once("visitors.php");

	session_start();

	if(!empty($_POST["name"]) && !empty($_POST["pass"])) {
		$name = $_POST["name"];
		$pass = $_POST["pass"];

		if(is_valid_member($name, $pass) == 1) {
			$_SESSION["valid_member"] = $name;
		}
	}

	if(!empty($_SESSION["valid_member"])) {
		$member = new Member($_SESSION["valid_member"]);

		$member->main();
	} else {
		$visitor = new Visitor();

		$visitor->main();
	}
?>