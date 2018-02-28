<?php
	require 'dbConnection.php';
	include 'dbConnection.php';
	$nameUP=$_POST['nameUpdate'];
	$regUP=$_POST['registrationUpdate'];
	$id=$_POST['idname'];
	$query1 = "UPDATE student SET name='".$nameUP."',registration ='".$regUP."' WHERE  ID=".$id;
	//echo "".$query1;
	$result1 = $connection->query($query1);
		if($result1 == 1)
		{
			echo "<br>Data is updated";
		}else
		{
			echo "<br>Error is occured";
		}
?>