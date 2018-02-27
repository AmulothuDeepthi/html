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

}

function ask_hidden( $prompt ) {
	echo $prompt;
	echo "\033[30;40m";  // black text on black background
	$input = fgets( STDIN );
	echo "\033[0m";      // reset
	return rtrim( $input, "\n" );
}
$pass = ask_hidden( 'pass: ' );
echo $pass."\n";
var_dump($pass);



$tbl->setHeaders(
    array('Language', 'Year')
);
$tbl->addRow(array('PHP', 1994));
$tbl->addRow(array('C',   1970));
$tbl->addRow(array('C++', 1983));
echo $tbl->getTable();




