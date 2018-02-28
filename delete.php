<?php

	require 'dbConnection.php';
	include 'dbConnection.php';
	$id=$_GET['id'];

		$query1 = "Delete from student WHERE  ID=".$id;
		//echo "".$query1;
		$result1 = $connection->query($query1);

			if($result1 == 1)
			{
				echo "<br>Data is Deleted";
			}else
			{
				echo "<br>Error is occured";
			}
?>