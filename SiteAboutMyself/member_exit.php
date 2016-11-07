<?php

require_once("member.php");

// start a session
session_start();

// unset all of the session variables
$_SESSION = array();

// note: this will destroy the session, and not the session data
if(ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// finally, destroy the session
session_destroy();

// redirect to main visitor page
print '
	<script>window.location.assign("visitor_home.php")</script>
';

?>