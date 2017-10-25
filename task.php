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
	$actions = array("Create " . $module,"View " . $module,"Edit " . $module,"Go to main menu", );
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
		echo "ok\n";
		if($module1==1)
		{
			$fields = resource mysql_list_fields ( string $task , string $module [, resource $link_identifier = databaseConnect()]);
			
			create($module,$actions,showfields($module));
		}
		elseif ($module1==2)
		{
			view($module,$actions,$fields);
		}
		elseif ($module1==3) 
		{
			edit($module,$actions,$fields);
			# code...
		}
		else
		{
			showMenu();
		}
	}
	else
	{
		echo "Invalid module,Please select again\n";
		showSubMenu();
	}
}
function create($module,$actions,showfields($module))
{
	echo "create success\n";
	}
}
function view($module,$actions,$fields)
{
	echo "view success\n";
}
function edit($module,$actions,$fields)
{
	echo "edit success\n";
}
?>
