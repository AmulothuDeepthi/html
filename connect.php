<?php
	// include_once('db.php');
 function databaseConnect()
{
    $conn = mysqli_connect('localhost','root','bhea@123','target') or die('database connection failed');
    return $conn;
}
	databaseConnect();
	if( isset($_GET['edit']) )
	{
		$id = $_GET['edit'];
		$res= mysqli_query("SELECT * FROM accounts WHERE name='$id'");
		$row= mysqli_fetch_array($res);
	}
 
	if( isset($_POST['newName']) )
	{
		$connection=databaseConnect();
	
		$newName = $_POST['newName'];
		$id  	 = $_POST['id'];
		$sql     = "UPDATE accounts SET name='$newName' WHERE name='$id'";
		$res=mysqli_query($connection, $sql) or die("error in updating data" . mysqli_error($connection));
		// $res 	 = mysqli_query($sql) 
                                    // or die("Could not update".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=index.php'>";
	}
	$connection=databaseConnect();
	$res=mysqli_query($connection, $sql) or die("error in updating data" . mysqli_error($connection));
	while($data=mysqli_fetch_assoc($res)){
		foreach ($data as $key => $value) {
		 echo "{$key} = {$value} \n";
	}
}
 mysql_close($conn);
?>
