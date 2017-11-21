<?php 
mysql_connect("localhost","root","bhea@123","companies");
mysql_select_db("companies");
$sql=mysql_query("select * from accounts");
$limit=10;
$count=0;
echo "<table border='1'>";
while($row=mysql_fetch_array($sql)){
	$message=$row('message');
	if($count<$limit){
	if($count==0){
	echo "<tr>";
	}
	echo "<td>$message</td>";
	}else{
	$count=0;
	echo "</tr><tr><td>$message</td>";
	}
	$count++;
	}
	echo "</tr></table>";
	?>