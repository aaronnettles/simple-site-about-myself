<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Assignment</title>
</head>

<body>
<h3>Question #1</h3>
<?php
//fib sequence
$a = 0;    
$b = 1; 
//loop to compute & display $c
for($i=0;$i<=21;$i++)    
{    
    $c=$a+$b;    
    echo $c."<br>";         
    $a=$b;       
    $b=$c;     
}   
?>
<h3>Question #2</h3>
<!--table-->
<table width="1088" border="1">
  <tr>
    <th width="129" scope="col">Number</th>
    <th width="194" scope="col">Square</th>
    <th width="251" scope="col">SquareRoot</th>
    <th width="252" scope="col">Log</th>
    <th width="228" scope="col">Log10</th>
  </tr>
  <tr>
    <th scope="row"><?php
	//loop to display numbers 0-20, process continues in each table but $p changes with each function added
for($i=0;$i<21;$i++)
{
	$p=$i;
	echo $p."<br>";
}
echo "<div>";
 ?></th>
    <td><?php
for($i=0;$i<21;$i++)
{
	echo " The number is\n".$i;
	$p=pow($i,2);
	echo " The Square is\n".$p."<br>";
	
}

 ?></td>
    <td><?php
for($i=0;$i<21;$i++)
{
	echo " The number is\n".$i;
	$p=sqrt($i);
	echo" The square root is\n". $p."<br>";
}

 ?></td>
    <td><?php 
for($i=0;$i<21;$i++)
{
	echo " The number is\n".$i;
	$p=log($i);
	echo" The log is\n". $p."<br>";
}

?></td>
    <td><?php 
for($i=0;$i<21;$i++)
{
	echo " The number is\n".$i;
	$p=log10($i);
	echo" The log10 is\n". $p."<br>";
}
 ?></td>
  </tr>
</table>

</body>
</html>