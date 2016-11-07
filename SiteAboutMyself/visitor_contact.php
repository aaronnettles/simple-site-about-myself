<?php

require_once("visitor.php");

// contact form
$content = '
    <div align="center">
      	<br />Our Team<br /><br />
      	<a href="http://ada.cameron.edu/~an908277/AboutAaron.html">Aaron Nettles</a><br /><br />
      	<a href="http://wimplestiltsen.link/Mediocre/">Matthew Hunt</a><br /><br />
      	<a href="http://ada.cameron.edu/~js923199/Myhome.html">Justin Smith</a><br /><br />
      	<a href="http://ada.cameron.edu/~cj913521/index.html">Chris Jones</a><br /><br />
      	<br /><br />
      	Contact Us<br /><br />
    		<form action="contact.php" method="post">
          	<label>Name</label>
            <input name="name" type="text" /><br /><br />
            <label>Email</label>
            <input name="email" type="text" /><br /><br />
            <textarea name="message" value="Message" rows="10" cols="40">Message</textarea><br />
          	<div class="robotic" id="pot">
              	<label>If you are human, leave this blank.</label>
            		<input name="robotest" type="text" id="robotest"/>
          	</div>
            <input type="submit" value="Send"/>
            <input type="reset" value="Reset"/>
      	</form>
    </div>
';

if(!empty($_POST["name"]) &&
   !empty($_POST["email"]) &&
   !empty($_POST["message"])) {
     
    $robotest = $_POST["robotest"];
     
    if($robotest) {
      $content .= '<p><br />You are a gutless robot.<br /></p>';
    } else { 
    	// my email address
    	$to = 'matthew.hunt@cameron.edu';
     
    	// contact subject
    	$subject = 'contact from outsider'; 

    	// details
    	$message = 'message from: ' .
    	           $_POST["name"] .
    	           '\n\n' .
    	           $_POST["message"];

    	// sender email address
    	$mail_from = $_POST["email"]; 

    	// header 
    	$header = 'From: webmaster@wimplestiltsen.link \n' .
	          	  'Reply-To: webmaster@wimplestiltsen.link \n' .
	          	  'X-Mailer: PHP/' .
	          	  phpversion();

    	// check, if message sent to my email 
    	if(mail($to, $subject, $message, $header)) {
	    	$content .= '<p><br />Your contact information and message have been received.<br /></p>';
    	} else {
	    	$content .= '<p><br />There has been an error.<br /><p>';
    	}
    }
}

$visitor = new Visitor();
$visitor->main($content);

?>