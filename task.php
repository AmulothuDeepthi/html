<?php
function databaseConnect()
{
    $conn = mysqli_connect('localhost','root','bhea@123','target') or die('database connection failed');
    return $conn;
}
echo "Welcome to SugarCRM 7.9.2\n";
Welcome();
function Welcome()
{
	echo "Username: ";
	$username = readline();
    echo "Password: ";
    $password = readline();
    if($username == 'admin' && $password == 'bhea@123')
    {
	    echo "You have successfully login to your account\n";
	    showMenu();
    }
    else
    {
		echo "Invalid credentials\n";
	    welcome();
    }
}
function showMenu()
{
	$module =array("accounts", "contacts", "cases");
	$arrlength=count($module);
	echo "Please select your module\n";
	for($i=1; $i <= $arrlength; $i++){
		echo $i . ". choose " ; 
		echo $i . " for " . $module[$i-1] . "\n";
	}
	$validatemodule=readline();
	$module1=intval($validatemodule);
	if(($module1<=$arrlength) && ($module1!=0))
	{
		showSubMenu($module[$module1-1]);
	}
	else
	{
		echo "Invalid module,Please select again\n";
		showMenu();
	}
}
function showSubMenu($module) 
{
	$actions = array("Create " . $module,"View " . $module,"delete " . $module,"Go to main menu", );
	$arrlength=count($actions);
	echo "Please select your module\n";

	for($i=0;$i<$arrlength;$i++){
		echo $i+1 . ". Select ";
		echo $i+1 . " for " . $actions[$i] . " \n";
	}
	$validatemodule=readline();
	$module1=intval($validatemodule);
	if(($module1<=$arrlength) && ($module1!=0))
	{
		$fieldsarray=array();
        $connection=databaseConnect();
        $sql="select * from $module";
        $result=mysqli_query($connection, $sql) or die("error in selecting data" . mysqli_error($connection));
        while ($fieldinfo=mysqli_fetch_field($result))
            {
                array_push($fieldsarray, $fieldinfo->name);
            }
		switch ($module1)
		{
			case 1:
				create($module,$actions,$fieldsarray);
				echo "Account created successfully";
				# code...
				break;
			case 2:
				view($module,$actions,$fieldsarray);
				print "viewed successfully \n";
				# code...
				break;
			case 3:
				delete($module,$actions,$fieldsarray);
				echo "deleted successfully"."\n";
				# code...
				break;
			default:
				showMenu();
				# code...
				break;
	 }
	 mysqli_close($connection);
	}
}
function create($module,$actions,$fieldsarray)
{
        $fieldvalues=array();
        foreach($fieldsarray as $value){
        	print "please enter $value \n";
        	$fieldvalue=readline();
        	array_push($fieldvalues, "$fieldvalue");
        }
        $valuestring=implode("','", $fieldvalues);
        $connection=databaseConnect();
        $query="insert into $module values('$valuestring')";
        $result=mysqli_query($connection, $query) or die("error in inserting data" . mysqli_error($connection));
		mysqli_close($connection);
}
function view($module,$actions,$fieldsarray)
{
	$connection=databaseConnect();
	$sql="select * from $module";
	$result=mysqli_query($connection,$sql);
	while($data=mysqli_fetch_assoc($result)){
		foreach ($data as $key => $value) {
		 echo "{$key} = {$value} \n";
	}
	echo "\n";
}
	mysqli_close($connection); 
}
function delete($module,$actions,$fieldsarray)
{
	$connection=databaseConnect();
	view($module,$actions,$fieldsarray);
	echo "please enter ID number";
	$id=readline();
	$id1=intval($id);
	print("$id1 \n");
	$sql="delete from $module where id= '$id1'";
	if($connection->query($sql)===true){
		echo "Records were deleted successfully";
	}else{
		echo "ERROR:Could not able to execute $sql.".mysqli_error($connection);
	}
	$connection->close();
}
?>	