<?php

require_once("visitor.php");

// home content
$content = '
	<p> <link href="styles_a.css" type="text/css" rel="stylesheet">
		
  <p>Established in 1997, the Dirty Water group has shown great effectiveness in the execution of various missions,
  both in the US and abroad. These missions have ranged from simple food catering escapedes, to large-scale government
  coups detats. Whatever your problem is, you can rest assured that Dirty Water can find a solution for it...
  </p><center>
  <h1>We\'re Sometimes Compared to Black Water</h1>
  <iframe width="420" height="315" src="https://www.youtube.com/embed/vaJYlk4z5RQ" frameborder="0" allowfullscreen></iframe></center>

	</p>
';

$visitor = new Visitor();
$visitor->main($content);

?>