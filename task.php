<?php
function databaseConnect()
{
    $conn = mysqli_connect('localhost','root','bhea@123','task') or die('database connection failed');
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
	$choice =array("accounts", "contacts", "cases");
	$arrlength=count($choice);
	echo "Please select your choice\n";
	for($i=1; $i <= $arrlength; $i++){
		echo $i . ". choose " ; 
		echo $i . " for " . $choice[$i-1] . "\n";
	}
	$validateChoice=readline();
	$choice1=intval($validateChoice);
	if(($choice1<=$arrlength) && ($choice1!=0))
	{
		showSubMenu($choice[$choice1-1]);
	}
	else
	{
		echo "Invalid Choice,Please select again\n";
		showMenu();
	}
}
function showSubMenu($choice) 
{
	$modules = array("Create " . $choice,"View " . $choice,"Edit " . $choice,"Go to main menu", );
	$arrlength=count($modules);
	echo "Please select your choice\n";
	for($i=0;$i<$arrlength;$i++){
		echo $i+1 . ". Select ";
		echo $i+1 . " for " . $modules[$i] . " \n";
	}
	$validateChoice=readline();
	$choice1=intval($validateChoice);
	if(($choice1<=$arrlength) && ($choice1!=0))
	{
		echo "ok";
		if($choice1==1)
		{
			$fields = array('First_Name','Last_Name','ID','Address1','Address2','Website');
			create($choice,$modules,$fields);
		}
		elseif ($choice1==2)
		{
			view($choice,$modules);
		}
		elseif ($choice1==3) 
		{
			edit($choice,$modules);
			# code...
		}
		else
		{
			showMenu();
		}
	}
	else
	{
		echo "Invalid Choice,Please select again\n";
		showSubMenu();
	}
}
function create($choice,$modules,$fields)
{
	echo "create success\n";
	
}
function view($choice,$modules)
{
	echo "view success\n";
}
function edit($choice,$modules)
{
	echo "edit success\n";
}
?>