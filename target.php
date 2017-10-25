<?php
	//PHP version of the user
	echo 'php version is  ' . phpversion()."<br><br>";
	echo".............................................................." . "<br><br>";
	echo "Tomorrow I\'ll learn PHP global variables."."<br>" . "This is a bad command:del c:\\*.*"."<br><br>";
	echo".............................................................."."<br><br>";
	$var='PHP Tutorial';
	//Retrieve name from query string and store to a local variable
	$name=$_POST['name'];
	echo "<strong>" . 'clients IP address '. "</strong>";
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
	echo $ip_address."<br><br>";
	//which browser the user is using
	echo "<strong>" . "Your User Agent is :". "</strong>" . $_SERVER ['HTTP_USER_AGENT']."<br><br>";
	//current file name of the user
	$current_file_name=basename($_SERVER['PHP_SELF']);
	echo "<strong>" . "current file name is : ". "</strong>" . $current_file_name."<br><br>";
	//components of url
	$url='https://www.bhea.com/life at bhea/events';
	$url=parse_url($url);
	echo "<strong>" . 'scheme is : ' . "</strong>" . $url['scheme']. "<br>";
	echo "<strong>" . 'host is : '  . "</strong>" . $url['host']. "<br>";
	echo "<strong>" . 'path is : '  . "</strong>"  . $url['path']. "<br><br>";
	//checking whether https is enabled or http is enabled.
	echo "<strong>"."checking whether http or https is enabled : " ."</strong>";
	if(!empty($_SERVER['https'])){
		echo "https is enabled"."<br>";
	}
	else{
		echo "http is enabled"."<br>";
	}
	echo".............................................................."."<br><br>";
	//changing the colors of the letters in a word.
	$text='PHP Tutorial';
	echo "<strong>" ."Changing the color of the letters in a word"."</strong>"."<br>";
	echo $text."<br>";
	$text=preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text );
	echo $text."<br>";
	echo".............................................................."."<br><br>";
	//validation for email
	$email="mail@example.com";
	if (filter_var($email,)) {
		# code...
	}

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
	<h3><?php echo "Hello $name"."<br>"; 
		echo"................................................................"."<br><br>";
	?></h3>
</body>
</html>
