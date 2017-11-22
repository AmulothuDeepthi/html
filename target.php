<?php
	//PHP version of the user
	echo 'php version is  ' . phpversion()."\n";
	echo".........................................................". "\n";
	$a=153;
	$b=5000;
	$c=10000;
	//printing the total number of lines in a file
	$current_file_name=basename($_SERVER['PHP_SELF']);
	$no_of_lines=count(file($current_file_name));
	echo "Total Number of lines in "."<font color=blue> $current_file_name  </font>". " file are : ". $no_of_lines. "\n";
	echo"..........................................................".  "\n";
	echo "Tomorrow I\'ll learn PHP global variables\n" . "This is a bad command:del c:\\*.*".   "\n";
	echo"..........................................................".  "\n";
	$var='PHP Tutorial';
	//Retrieve name from query string and store to a local variable
	$name=$_POST['name'];
	echo 'clients IP address ';
	//whether ip is from share internet
	if (!empty($_SERVER['HTTP_CLIENT_IP']))   
	  {
	    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
	  }
	//whether ip is from proxy
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
	  {
	    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
	  }
	//whether ip is from remote address
	else
	  {
	    $ip_address = $_SERVER['REMOTE_ADDR'];
	  }
	echo $ip_address.  "\n";
	//which browser the user is using
	echo "Your User Agent is :". $_SERVER ['HTTP_USER_AGENT'].  "\n";
	//current file name of the user
	echo "current file name is : ".$current_file_name.  "\n";
	//components of url
	$url='https://www.bhea.com/life at bhea/events';
	$url=parse_url($url);
	echo 'scheme is : '. $url['scheme'].  "\n";
	echo 'host is : ' . $url['host'].  "\n";
	echo 'path is : '  . $url['path']. "\n";
	//checking whether https is enabled or http is enabled.
	echo "checking whether http or https is enabled : " ;
	if(!empty($_SERVER['https'])){
		echo "https is enabled \n";
	}
	else{
		echo "http is enabled \n";
	}
	//printing the last modified date of the file 
	$file_last_modified = filemtime($current_file_name);
	echo "Last modified ".date("l, dS F, Y, h:ia",$file_last_modified).  "\n";
	echo"..........................................................".  "\n";
	//changing the colors of the letters in a word.
	$text='PHP Tutorial';
	echo "Changing the color of the letters in a word". "\n";
	echo $text. "\n";
	$text=preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
	echo $text. "\n";
	echo"..........................................................".  "\n";
	//printing the sequence of values using for loop
	$z='A00';
	for($n=0;$n<5;$n++){
		echo ++$z. "\n";
	}
	//printing the last error occured
	echo $x;
	print_r(error_get_last());
	echo  "\n";
	//finding the biggest number among 10,20,30
	$big=($a>$b)?(($a>$c)?$a:$c):(($b>$c)?$b:$c);
	echo $big." is the biggest number among $a, $b, $c ".  "\n";
	//Printing the full url
	$full_url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	echo "Full url is : ".$full_url. "\n";
	//printing the name of the current user
	echo "Name of the current user is: " .get_current_user(). "\n";
	//printing the document root directory
	$rd=getenv('DOCUMENT_ROOT');
	echo "document root directory is : ".$rd. "\n";
	// Printing the Operating system PHP is running on
	echo php_uname(). "\n";
	echo PHP_OS. "\n";
	if (strtoupper(substr(PHP_OS, 0,3))==='LIN') {
		echo "This is a server using Linux!". "\n";
		# code...
	}else{
		echo "This is a server not using Linux!". "\n";
	}
	echo"..........................................................".  "\n";
	// printing the php credits
	$credit=phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);
	echo $credit. "\n";
	echo"..........................................................".  "\n";
	// printing the directory path used for temporary files
	$temp_file=tempnam(sys_get_temp_dir(),'TUX');
	echo "Path for temporary files storage is : ".$temp_file. "\n";
	// swapping two numbers
	echo "Numbers before swapping are a= " . $a ." , b=" . $b. "\n";
	$temp=$a;
	$a=$b;
	$b=$temp;
	echo "Numbers after swapping are a= " . $a ." , b=" . $b. "\n"; 
	// checking whether the given number is armstrong or not 
	echo"..........................................................".  "\n";
	$le=strlen($a);
	$sum=0;
	// $a=string($a);
	for($i=0;$i<$le;$i++){
		$sum=$sum+ pow((string)$a{$i},$le);
	}
	if ($sum==$a) {
		echo "armstrong number";
		# code...
	}else{
		echo "not an armstrong number";
	}
	//displaying string, values within the table.
	echo "entering data into a table using php script". "\n";
	// echo "<font color="white">.................</font>";
	echo "<table border=3 cellspacing=1 cellpadding=15>
	<tr> <td><font color=blue> Salary of Mr. A is</td> <td>$a$</font></td></tr>
	<tr> <td><font color=blue> Salary of Mr. B is</td> <td>$b$</font></td></tr>
	<tr> <td><font color=blue> Salary of Mr. C is</td> <td>$c$</font></td></tr>
	</table>"
?>	
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<title><?php echo $var; ?></title>
</head>
<body>
	<h3><?php echo $var; ?></h3>
	<p>PHP, an acronym for Hypertext Preprocessor, is a widely - used open source general - purpose scripting language. It is a cross - platform, HTML embedded server - side scripting language and is especially suited for the web development.</p>
	<p>Go to the <?php echo $var ?></p>
	<form method='post'>
		<h2>Put your name here</h2>
		<input type="text" name="name" value="">
		<input type="submit" name="submit" value="submit name">
	</form>
	<h3><?php echo "Hello $name". "\n"; 
		echo"................................................................".  "\n";
	?></h3>
</body>
</html>
