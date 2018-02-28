
<?php
	require 'dbConnection.php';
	include 'dbConnection.php';
	$id=$_GET['id'];
	echo "<br />".$id;
	$name="";
	$reg="";

	$query1 = "select * from `student` where ID = ".$id."";
	echo "<br/>".$query1;
	$result = $connection->query($query1);

		foreach ($result as $key => $value) {
			$name  = $value['name'];
			$reg = $value['registration'];
		}

		echo'
			<form role="form" method="post" action="update.php">
			<h2><pre>Create new account</pre></h2>
			<pre>Name:     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="nameUpdate" value="'.$name.'"><br/></pre>
			<pre>Registration:     <input type="text" name="registrationUpdate" value="'.$reg.'"><br/></pre>
			<input type="hidden" name="idname" value="'.$id.'" >

			<button type="submit" name="update">Update</button><br/><br/>
		 </form>';
?>
