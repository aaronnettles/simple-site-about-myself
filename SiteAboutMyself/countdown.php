<!doctype html>
<html>
<head>
<title>PHP Countdown Timer</title>
<style>
.green{color:blue;}
 
h1{
font-size:3em;
font-weight:bold;
font-family:Arial, Helvetica, sans-serif;
}
 
</style>
</head>
<body>
<?php
$date = strtotime("May 06, 2016 12:00 PM");
$remaining = $date - time();
$days_remaining = floor($remaining / 86400);
$hours_remaining = floor(($remaining % 86400) / 3600);
?>
 
<h1>There are <span class="green"> <?php echo $days_remaining?></span> days and <span class="green"> <?php echo $hours_remaining?></span> hours left until classes end</h1>
</body>
</html>