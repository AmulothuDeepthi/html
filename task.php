<?php
function databaseConnect()
{
    $conn = mysqli_connect('localhost','root','bhea@123','task') or die('database connection failed');
    return $conn;
<<<<<<< HEAD
    echo "Connected successfully";
=======
>>>>>>> 8d9986a252f731db971234e2301a390d13bcd527
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
<<<<<<< HEAD
	$arrlength=count($modules);
	echo "Please select your choice\n";
	for($i=0;$i<$arrlength;$i++){
=======
	$actions = array("Create", "View", "Edit");
	$arrlength=count($modules);
	$arrlength1=count($actions);
	echo "Please select your choice\n";
	for($i=1;$i<=$arrlength;$i++){
>>>>>>> 8d9986a252f731db971234e2301a390d13bcd527
		echo $i+1 . ". Select ";
		echo $i+1 . " for " . $modules[$i] . " \n";
	}
	$validateChoice=readline();
	$choice1=intval($validateChoice);
	if(($choice1<=$arrlength) && ($choice1!=0))
	{
<<<<<<< HEAD
		if($choice1==1)
=======
		if($choice==1)
>>>>>>> 8d9986a252f731db971234e2301a390d13bcd527
		{
			create($choice,$modules);
		}
		elseif ($choice1==2)
		{
			view($choice,$modules);
		}
<<<<<<< HEAD
		elseif ($choice1==3) 
=======
		elseif ($choice==3) 
>>>>>>> 8d9986a252f731db971234e2301a390d13bcd527
		{
			edit($choice,$modules);
			# code...
		}
		else
		{
<<<<<<< HEAD
			showMenu();
=======
			exit(0);
>>>>>>> 8d9986a252f731db971234e2301a390d13bcd527
		}
	}
	else
	{
		echo "Invalid Choice,Please select again\n";
<<<<<<< HEAD
		showSubMenu($choice);
	}
}
function create($choice,$modules)
{
	$connection=databaseConnect();
	echo "create\n";
	//showSubMenu($choice);
}
function view($choice,$modules)
{
	echo "view\n";
	showSubMenu($choice);
}
function edit($choice,$modules)
{
	echo "edit\n";
	showSubMenu($choice);
=======
		showSubMenu();
	}
}
function actions($choice,$modules)
{
	echo "1\n";
>>>>>>> 8d9986a252f731db971234e2301a390d13bcd527
}
?>