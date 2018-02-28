<?php
require 'dbConnection.php';
if ($connection->connect_error) 
{
	print("connection error");
}
else 
{
	$Name=$_POST["name"];
	$Registration=$_POST["registration"];
		$query = "insert into student(name, registration) values('$Name','$Registration')";
		//echo $query;
		$result = $connection->query($query);
			if ($result > 0) 
			{
				echo "<h3>record inserted</h3>";

				$query = "select * from student";
				$res = $connection->query($query);
				foreach ($res as $key => $student) 
				{
					//echo "Edit.php?id=".$student['ID'];
					echo "<br>".$student['name'];
					echo "<br>".$student['registration'];
					echo '<br> <a href="Edit.php?id='.$student['ID'].'" ><button>Edit</button></a><br>';
					echo '<br> <a href="delete.php?id='.$student['ID'].'" ><button>Delete</button></a><br>';
				}
			}
}

?>