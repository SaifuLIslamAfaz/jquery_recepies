<?php


$mysqli = new mysqli('localhost','root','','lajax');
$selectQuery = 'Select * from users where username ="'.$_POST['username'].'"';
$result  = $mysqli->query($selectQuery);
if ($result)
{
	if($result->num_rows > 0)
	{
		echo false;	
	}
	else
	{
		echo true;
	}
}
else
{
	echo false;
}
?>