<?php
	$conn=mysqli_connect("localhost","root","bhea@123","target");
	if (mysqli_connect_error()) {
		echo "Failed to connect to mysql". mysqli_connect_error();
	}
	$sql="select * from accounts";
	if($conn->query($sql)){
		if($rows= $result->fetch_field_direct()){
			var_dump($rows);
			echo $rows->table;
		}else{
			echo "false";
		}
	}
?>