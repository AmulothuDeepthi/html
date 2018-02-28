<?php
include_once "/home/deepthi/html/LucidFrame/Console/ConsoleTable.php";

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
    $password = ask_hidden( 'password: ' );
    if($username == 'admin' && $password == 'bhea@123')
    {
	    echo "You have successfully login to your account\n";
	    readChoice();
    }
    else
    {
		echo "Invalid credentials\n";
	    welcome();
    }
}
	readChoice();
function ask_hidden( $prompt ) {
	echo $prompt;
	echo "\033[30;40m";  // black text on black background
	$input = fgets( STDIN );
	echo "\033[0m";      // reset
	return rtrim( $input, "\n" );
}
function  readChoice(){
	echo "Please select your Choice\n";
	echo "Choose 1 to select Accounts\n";
	echo "Choose 2 to select Contacts \n";
	echo "Choose 3 to select Cases\n";
	echo "choose 4 to exit\n";
	$choice=readline();
	validateChoice($choice);
}
function validateChoice($choice)
{
    if ($choice==1 || $choice==2 || $choice==3 || $choice==4)
    {
		menuDetails($choice);
    }
    else
    {
		echo "Please select a valid choice\n";
		readChoice();
    }
}
function menuDetails($choice)
{
	switch ($choice) 
	{
		case '1':
			echo "Welcome to Accounts\n";
			echo "select 11 to create Accounts\n";
			echo "select 12 to edit Accounts\n";
			echo "select 13 to view Accounts\n";
			echo "select 14 to go to main menu\n";
			echo "select 15 to exit\n";
			AccountDetails();
			break;
        case '2':
			echo "Welcome to Contacts \n";
			echo "select 21 to create a Contact\n";
			echo "select 22 to edit a Contact\n";
			echo "select 23 to view Contact\n";
			echo "select 24 to go to main menu\n";
			echo "select 25 to exit\n";
			ContactDetails();
			break;
        case '3':
			echo "Welcome to cases\n";
			echo "select 31 to create a case\n";
			echo "select 32 to edit a case\n";
			echo "select 33 to view cases\n";
			echo "select 34 to go to main menu\n";
			echo "select 35 to exit\n";
			caseDetails();
			break;
        case '4':
			exit(0);
			break;
        default:
			break;
	}
}
function AccountDetails()
{
	$option=readline();
        switch ($option) 
        {
			case '11':
				echo "create Account\n";
				createAccount();
				break;
			case '12':
				echo "edit Account\n";
				editAccount();
				break;
			case '13':
				echo "view Account\n";
				viewAccount();
				break;
			case '14':
				readChoice();
				break;
			case '15':
				exit();
				break;
			default:
				# code...
				break;
		}
}
function ContactDetails()
{
	$option=readline();
		switch ($option) 
		{
			case '21':
				echo "create Contact\n";
				createContact();
				break;
			case '22':
				echo "edit Contact\n";
				editContact();
				break;
			case '23':
				echo "view Contact\n";
				viewContact();
				break;
			case '24':
				readChoice();
				break;
            case '25':
				exit();
				break;
			default:
				# code...
				break;
		}
}
function caseDetails()
{
	$option=readline();
        switch ($option) 
        {
			case '31':
				echo "create case\n";
				createCase();
				break;
			case '32':
				echo "edit case\n";
				editCase();
				break;
			case '33':
				echo "view case\n";
				viewCase();
				break;
			case '34':
				readChoice();
				break;
			case '35':
				exit();
				break;
			default:
				# code...
			break;
		}
}
function createAccount()
{
	echo "enter First Name: ";
	$firstname = readline();
	echo "enter Last Name: ";
	$lastname = readline();
	echo "enter id: ";
	$ID = readline();
	echo "enter address1: ";
	$address1 = readline();
	echo "enter address2: ";
	$address2 = readline();
	echo "enter Website link: ";
	$Website =readline();
	$connection=databaseConnect();
	$query=" insert into accounts values('$firstname','$lastname','$ID','$address1','$address2','Website')";
	$result=mysqli_query($connection, $query) or die("error in inserting data\n"  . mysqli_error($connection));
	mysqli_close($connection);
	echo "You have successfully created one record\n";
	AccountDetails();
}
function viewAccount()
{
	$tbl = new LucidFrame\Console\ConsoleTable();
	$connection=databaseConnect();
	$query="select * from  accounts";
	$result=mysqli_query($connection, $query);
	$k_array=array();
	while ($fieldinfo=mysqli_fetch_field($result))
    {
    printf("Name: %s\n",$fieldinfo->name);
    array_push($k_array, $fieldinfo->name);
    }
    $tbl->setHeaders($k_array);
	while($row=mysqli_fetch_assoc($result)) 
		{
			$v_array=array();
			foreach ($row as $key => $value) {
				array_push($v_array, $value);
			}
			$arraystring = implode(',',$v_array);
			print_r($arraystring."\n");
			$tbl->addRow($v_array);
		}
	echo $tbl->getTable();
	echo "Please press R to view again\n";
	echo "enter 00 to goto main menu";
	$c=readline();
	if ($c=='R') 
			
	{
		return(viewAccount());
	}
	else if($c=='00')
		readChoice();
	else
		exit();
	mysqli_close($connection);
}
function editAccount()
{
	$connection=databaseConnect();
	$query="select * from  accounts";
	$result=mysqli_query($connection, $query);
	$temp=0;
	while ($row=mysqli_fetch_array($result)) 
	{
		$temp=$temp+1;
		echo "Row number $temp\n";
		print_r($row);
	}
	echo "enter the row number you want to edit\n";
	$num=readline();
	$num=$num-1;
	mysqli_data_seek($result, $num);
	$row1=mysqli_fetch_array($result);
	print_r($row1);
	$condition=$row1['ID'];
	echo "enter the field you want to edit\n";
	$field=readline();
	echo "enter the value you want to enter in that field\n";
	$value=readline();
	$query1="update accounts set $field='$value' where ID='$condition'";
	$result=mysqli_query($connection, $query1) or die("error in inserting data" . mysqli_error($connection));
	mysqli_close($connection);
	echo "if you want to continue press Y or you want to exit press N\n";
	$s=readline();
	if ($s=='Y') 
	{
		return(editAccount());
	}
	else if($s=='N')
	{
		exit(0);
	}
	else
		exit(0);
}
function createContact(){
	$conn = mysqli_connect('localhost','root','bhea@123','companies');
	echo "enter Contact name: ";
    $name = readline();
    echo "enter id: ";
    $ID = readline();
    echo "enter mobile Number: ";
    $mobileNumber=readline();
    echo "enter office Number: ";
    $officeNumber=readline();
    $connection=databaseConnect();
	$query=" insert into contacts values('$name','$ID','$mobileNumber','$officeNumber')";
	$result=mysqli_query($connection, $query) or die("error in inserting data\n"  . mysqli_error($connection));
	mysqli_close($connection);
    echo "You have successfully created one contact\n";
    ContactDetails();
}
function viewContact()
{
	$connection=databaseConnect();
    $query="select * from  contacts";
    $result=mysqli_query($connection, $query);
    $count=0;
    while ($row=mysqli_fetch_array($result)) 
    {
        $count=$count+1;
        echo "Row number $count\n";
        print_r($row);
        contactDetails();
		echo "Please press R to view again\n";
		echo "enter 00 to goto main menu";
		$c=readline();
		if ($c=='R') 
		{
			return(viewContact());
		}
		else if($c=='00')
			readChoice();
		else
			exit();
		mysqli_close($connection);
    }
}	
function editContact()
{
	$connection=databaseConnect();
	$query="select * from  contacts";
	$result=mysqli_query($connection, $query);
	$temp=0;
	while ($row=mysqli_fetch_array($result)) 
	{
		$temp=$temp+1;
		echo "Row number $temp\n";
		print_r($row);
	}
	echo "enter the row number you want to edit\n";
	$num=readline();
	$num=$num-1;
	mysqli_data_seek($result, $num);
	$row1=mysqli_fetch_array($result);
	print_r($row1);
	$condition=$row1['ID'];
	echo "enter the field you want to edit\n";
	$field=readline();
	echo "enter the value you want to enter in that field\n";
	$value=readline();
	$query1="update contacts set $field='$value' where ID='$condition'";
	$result=mysqli_query($connection, $query1) or die("error in inserting data" . mysqli_error($connection));
	mysqli_close($connection);
	echo "if you want to continue press Y or you want to exit press N\n";
	$s=readline();
	if ($s=='Y') 
	{
		return(editContact());
	}
	else if($s=='N')
	{
		exit(0);
	}
	else
		exit(0);
}
function createCase()
{
    echo "enter your case number\n";
    $CaseNumber=readline();
    echo "enter the Account name that submitted the case\n";
    $AccountName=readline();
    echo "enter the type of catergery that this case falls in to\n";
    $Type=readline();
    echo "enter the cause and details of the case\n ";
    $Description=readline();
    echo "enter the status of the case\n";
    $Status=readline();
    echo "enter the results of investigation into the problem\n";
    $connection=databaseConnect();
    $query=" insert into cases values('$CaseNumber','$AccountName','$Type','$Description','$Status')";
    $result=mysqli_query($connection, $query) or die("error in inserting data\n"  . mysqli_error($connection));
    mysqli_close($connection);
    echo "Press N to continue or press x to exit\n";
    echo "Press 00 to go to main menu\n";
    $c=readline();
    if ($c=='C') 
    {
        return(createCase());
    }
    else if ($c==00)
    {
       	readChoice();
    }
    else
    {
        exit();
        mysqli_close($connection);
	}
}
function editCase()
{
	$connection=databaseConnect();
    $query="select * from  cases";
    $result=mysqli_query($connection, $query);
    $count=0;
    while ($row=mysqli_fetch_array($result)) 
    {
        $count=$count+1;
        echo "Row number $count\n";
        print_r($row);
    }
    echo "enter the row number you want to edit\n";
    $num=readline();
    $num=$num-1;
    mysqli_data_seek($result, $num);
    $row1=mysqli_fetch_array($result);
    print_r($row1);
    $condition=$row1['CaseNumber'];
    $account=$row1['AccountName'];
    echo "enter the field you want to edit\n";
    $field=readline();
    echo "enter the value you want to enter in that field\n";
    $value=readline();
    $query1="update cases set $field='$value' where CaseNumber='$condition'";
    $result=mysqli_query($connection, $query1) or die("error in inserting data\n"  . mysqli_error($connection));
    mysqli_close($connection);
    echo "if you want to continue press Y or you want to exit press N\n";
    $s=readline();
    if ($s=='Y') 
    {
        return(editCase());
    }
    else if($s=='N')
    {
        exit(0);
    }
    else
        exit(0);
}

function viewCase()
{
	$connection=databaseConnect();
	$query="select * from  cases";
	$result=mysqli_query($connection, $query);
	$count=0;
	while ($row=mysqli_fetch_array($result)) 
	{
	    $count=$count+1;
        echo "Row number $count\n";
        print_r($row);
	}
	    echo "Please press R to view again\n";
	    echo "enter 00 to goto main menu";
	    $c=readline();
	    if ($c=='R') 
	    {
        	return(viewCase());
	    }
	    else if($c=='00')
	        readChoice();
	    else
	        exit();
	    mysqli_close($connection);
	}   
?>
