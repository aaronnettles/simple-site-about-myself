<?php
/* use on each page to redirct user if he doesn't belong
if(!$_POST['name'] || !$_POST['password']){
    header("Location: home.html");  Redirect browser 
    exit;
}
	*/

if (isset($_POST['Submit'])) {
	
     $_SESSION['name'] = $_POST['name'];
	 $_SESSION['password'] = $_POST['password'];
}
if ($_POST['password']) {
	
}
?> 