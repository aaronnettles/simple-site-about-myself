<?php

require_once("member.php");

// start a session
session_start();

// home content
$content = '
	<p>
		Content
	</p>
';

if(!empty($_SESSION["valid_member"])) {
	$member = new Member($_SESSION["valid_member"]);
	$member->main($content);
} else {
	print '
		window.location="visitor_member_entrance.php";
	';
}

?>