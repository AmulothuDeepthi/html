<?php
	//PHP version of the user
	echo 'php version is  ' . phpversion()."\n";
	echo"---------------------------------------------------------- \n";
	$a=153;
	$b=5000;
	$c=10000;
	//printing the total number of lines in a file
	$current_file_name=basename($_SERVER['PHP_SELF']);
	$no_of_lines=count(file($current_file_name));
	echo "Total Number of lines in "."<font color=blue> $current_file_name  </font>". " file are : ". $no_of_lines. "\n";
	echo"---------------------------------------------------------- \n";
	echo "Tomorrow I\'ll learn PHP global variables\n" . "This is a bad command:del c:\\*.*".   "\n";
	echo"---------------------------------------------------------- \n";
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
	echo"---------------------------------------------------------- \n";
	//changing the colors of the letters in a word.
	$text='PHP Tutorial';
	echo "Changing the color of the letters in a word". "\n";
	echo $text. "\n";
	$text=preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
	echo $text. "\n";
	echo"---------------------------------------------------------- \n";
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
	echo"---------------------------------------------------------- \n";
	// printing the php credits
	$credit=phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);
	echo $credit. "\n";
	echo"---------------------------------------------------------- \n";
	$temp_file=tempnam(sys_get_temp_dir(),'TUX');
	echo "Path for temporary files storage is : ".$temp_file. "\n";
	// swapping two numbers
	echo "Numbers before swapping are a= " . $a ." , b=" . $b. "\n";
	$temp=$a;
	$a=$b;
	$b=$temp;
	echo "Numbers after swapping are a= " . $a ." , b=" . $b. "\n"; 
	// checking whether the given number is armstrong or not 
	echo"---------------------------------------------------------- \n";
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
	echo"---------------------------------------------------------- \n";
	$color = array('white', 'green', 'red', 'blue', 'black');
	echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
	echo"---------------------------------------------------------- \n";
	// php script to display the values in an array in unordered list
	foreach ($color as $c) {
		echo $c;
		# code...
	}
	sort($color);
	echo "<ul>";
	foreach ($color as $y) {
		echo "<li>$y</li>";
		# code...
	}
	echo "</ul>";
	echo"---------------------------------------------------------- \n";
	// printing the country Names and its capitals and sorting the names based on their capitals of the country
	$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
	"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
	"Finland"=>"Helsinki", "France" => "Paris",
	"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
	"Germany" => "Berlin", "Greece" => "Athens",
	"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
	"Portugal"=>"Lisbon", "Spain"=>"Madrid",
	"Sweden"=>"Stockholm", "United Kingdom"=>"London",
	"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
	"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
	"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
	"Austria" => "Vienna", "Poland"=>"Warsaw") ;
	asort($ceu) ;
	foreach($ceu as $country => $capital)
	{
	echo "The capital of $country is $capital"."\n" ;
	}
	echo"---------------------------------------------------------- \n";
	// deleting the values from an array and sorting it again
	$x = array(1, 2, 3, 4, 5);
	var_dump($x);
	unset($x[3]);
	$x=array_values($x);
	echo '';
	var_dump($x);
	$x = array(1, 2, 3, 4, 5);
	echo"---------------------------------------------------------- \n";
	// Printing the first element of the array
	$color=array(4=>'white', 6=>'green', 11=>'red');
	echo reset($color)."\n";
	echo"---------------------------------------------------------- \n";
	// decoding the JSON string
	$a = '{"Title": "The Cuckoos Calling",
	"Author": "Robert Galbraith",
	"Detail":
	{ 
	"Publisher": "Little Brown"
	 }
	  }';
	  $j1=json_decode($a,true);
	 array_walk_recursive($j1, "decode");
	echo"---------------------------------------------------------- \n";
	// Inserting a new item in the array
	echo "original array is : "."\n";
	foreach($x as $a)
	{echo $a;}
	echo "\n";
	$inserted ='$';
	array_splice($x,3,0,$inserted);
	echo "After inserting the array values are as follows:"."\n";
	foreach($x as $a)
	{echo $a;}
	echo "\n";
	echo"---------------------------------------------------------- \n";
	// printing the array in 
	// ascending order sort by value
	echo "Associative array : Ascending order sort by value \n";
	$array2=array("Sophia"=>"31","Jacob"=>"41", "William"=>"39","Ramesh"=>"40");
	asort($array2);
	foreach ($array2 as $y => $y_value) {
		echo "age of ".$y."is :".$y_value."\n";
		# code...
	}
	// ascending order sort by key
	echo "Associative array : Ascending order sort by key \n";
	ksort($array2);
	foreach ($array2 as $y => $y_value) {
		echo "age of ".$y."is :".$y_value."\n";
		# code...
	}
	// descending order sort by value
	echo "Associative array : Descending order sort by value \n";
	arsort($array2);
	foreach ($array2 as $y => $y_value) {
		echo "age of ".$y."is :".$y_value."\n";
		# code...
	}
	// descending order sort by key	
	echo "Associative array : Descending order sort by key \n";
	krsort($array2);
	foreach ($array2 as $y => $y_value) {
		echo "age of ".$y."is :".$y_value."\n";
		# code...
	}
	echo"---------------------------------------------------------- \n";
	// calculating and displaying the average temperature, sorted array, five lowest and five highest temperatures in the following array
	$temperature="78,60,62,68,71,68,73,85,66,64,76,63,81,76,73,68,72,73,75,65,74,63,67,65,64,68,73,75,79,73";
	$temp_arr=explode(',', $temperature);
	$temp_arr_length=count($temp_arr);
	$tot_temp=0;
	foreach ($temp_arr as $temp) {
		$tot_temp +=$temp;
		# code...
	}
	$avg_temp=$tot_temp/$temp_arr_length;
	echo "Average temperature is : ". $avg_temp."\n";
	sort($temp_arr);
	echo "sorted array is :  \n";
	for ($i=0; $i < $temp_arr_length; $i++) { 
		echo $temp_arr[$i].",";
		# code...
	}
	echo "\n";
	echo "Five lowest temperatures are : ";
	for ($i=0; $i < 5; $i++) { 
		echo $temp_arr[$i].",";
		# code...
	}
	echo "\n";
	echo "Five highest temperatures are : ";
	for ($i=($temp_arr_length-5); $i < ($temp_arr_length); $i++) { 
		echo $temp_arr[$i].",";
		# code...
	}
	echo "\n";
	echo"---------------------------------------------------------- \n";
	// Merging the two arrays by index
	$array1=array(array(77,87),array(23,45));
	$array3=array("general","com");
	$arr_length=count($array1);
	$arr_length1=count($array3);
	echo "original array1 is : ";
	echo implode(" ",$array1)."\n";
	echo "original array2 is : ";
	echo implode(" ",$array3)."\n";
	echo '<pre>';
	Print_r(array_map('merge_arrays_by_index', $array3,$array1));
	echo"---------------------------------------------------------- \n";
	// changing the array values to upper or lower case
	$colors=array('A'=>'Blue', 'B'=>'Green','C'=>'Red');
	echo "Actual array";
	print_r($colors);
	echo "Values in lower case are : ";
	$mycolor=change_case($color,CASE_LOWER);
	print_r($mycolor);
	echo "Values in upper case are : ";
	$mycolor=change_case($color,CASE_UPPER);
	print_r($mycolor);
	echo"---------------------------------------------------------- \n";
	// displaying all the numbers between 200 and 300 which are divisible by 4
	echo "Numbers divisible by 4 are : ".implode(", ",range(200,250,4))."\n";
	echo"---------------------------------------------------------- \n";
	// printing the shortest/longest string length from the array
	$my_array=array("abcde","abc","de","hjjjjj","g","wer");
	$new_array=array_map('strlen',$my_array);
	echo "shortest string length is : ".min($new_array)."\n";
	echo "longest string length is : ".max($new_array)."\n";
	echo"---------------------------------------------------------- \n";
	// displaying random numbers with in the given range
	$n=range(1,30);
	shuffle($n);
	echo "display of random numbers with in the given range : ";
	for($x=0;$x<20;$x++){
		echo $n[$x].', ';
	}
	echo "\n";
	echo"---------------------------------------------------------- \n";
	// displaying the largest key jin an array
	$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
	"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
	"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
	"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
	"United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;
	echo "key values are : ";
	foreach ($ceu as $key => $value) {
		echo $key.", ";
		# code...
	}
	echo "\n";
	$max_key=max(array_keys($ceu));
	echo "maximum key among the keys are : ".$max_key."\n";
	echo"---------------------------------------------------------- \n";
	// displaying minimum value in an array
	print_r("Minimum value in the array is : ".min_value(array(-1,0,1,12,-100,1))."\n");
	echo"---------------------------------------------------------- \n";
	// Floor decimal numbers with precision
	print_r("1.155 After precision adjustment : ".floorDec(1.155,2,".")."\n");
	print_r("100.25781 After precision adjustment : ".floorDec(100.25781,4,".")."\n");
	print_r("2.9636 After precision adjustment : ".floorDec(-2.9636,3,".")."\n");
	echo"---------------------------------------------------------- \n";
	//displaying string, values within the table.
	// echo "entering data into a table using php script". "\n";
	// echo "<font color="white">.................</font>";
	// echo "<table border=3 cellspacing=1 cellpadding=15>
	// <tr> <td><font color=blue> Salary of Mr. A is</td> <td>$a$</font></td></tr>
	// <tr> <td><font color=blue> Salary of Mr. B is</td> <td>$b$</font></td></tr>
	// <tr> <td><font color=blue> Salary of Mr. C is</td> <td>$c$</font></td></tr>
	// </table>"
function decode($value,$key){
  	echo "$key : $value"."\n";
  }
function merge_arrays_by_index($x,$y){
	$temp=array();
	$temp[]=$x;
	if(is_scalar($y))
	{
		$temp[]=$y;
	}
	else{
		foreach ($y as $k => $v) {
			$temp[]=$v;
			# code...
		}
	}
	return $temp;
  }
  function change_case($input,$case){
  	$narray=array();
  	if(!is_array($input)){
  		return $narray;
  	}
  	foreach($input as $key=>$value){
  		if(is_array($value)){
  			$narray[$key]=change_case($value,$case);
  			continue;
  		}
  		$narray[$key]=($case==CASE_UPPER?strtoupper($value):strtolower($value));
  	}
  	return $narray;
  }
  function min_value(array $values){
  	return min(array_diff(array_map('intval',$values),array(0)));
  }
  function floorDec($number,$precision,$separator){
  	$number_part=explode($separator, $number);
  	$number_part[1]=substr_replace($number_part[1], $separator, $precision,0);
  	if($number_part[0]>=0){
  		$number_part[1]=floor($number_part[1]);
  	}
  	else{
  		$number_part[1]=ceil($number_part[1]);
  	}
  	$ceil_number=array($number_part[0],$number_part[1]);
  	return implode($separator,$ceil_number);
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
	<h3><?php echo "Hello $name". "\n"; 
		echo"................................................................".  "\n";
	?></h3>
</body>
</html>
