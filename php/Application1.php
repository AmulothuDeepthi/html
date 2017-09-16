one($z);
function one($z){
	echo "Choose one of the the options in the list below \n";
	echo "Choose 1 for accounts  \n ";
	echo "Choose 2 for contacts \n ";
	echo "Choose 3 for cases \n ";
	$a=fgets(STDIN);
	main($a);
	if($a == 1){
		echo "Choose one of the the options in the list below \n";
		echo "Choose 1 for creating accounts  \n ";
		echo "Choose 2 for editing accounts \n ";
		echo "Choose 3 for viewing accounts \n ";
		echo "Choose 9 to go back to main menu\n";
		$c = fgets(STDIN);
		account($c);
			if($c == 1){
				$conn = mysqli_connect('localhost', 'root', 'bhea@123', 'Application');
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				echo "Connected successfully\n";
			}
		}
	if($a == 2){
		echo "Select one of the options 
			Press 1 for creating contacts  
			Press 2 for editing contacts
			Press 3 for viewing contacts 
			Press 9 to go back to main menu\n";
										
		$d = fgets(STDIN);
		contacts($d);
		}
	if($a == 3){
		echo "Select one of the options 
			Press 1 for creating Cases 
			Press 2 for editing Cases
			Press 3 for viewing Cases 
			Press 9 to go back to main menu\n";
		$e = fgets(STDIN);
		cases($e);
		}
}
function main($b){
	 if($b==1 || $b==2 || $b == 3){ 
		echo "valid number\n";
		return $b;
		}
		else {
		echo "Please enter a valid number";
		$b = fgets(STDIN);
		return (main($b));
		}
	}	
function account($aa){
	if($aa == 1 || $aa == 2 || $aa == 3 || $aa == 9){
		echo "valid Number\n";
		}
		else{
			echo "please enter a valid number\n";
			$aa = fgets(STDIN);
			account($aa);
			}
		return $aa;
	}
function contacts($aa){
	if($aa == 1 || $aa == 2 || $aa== 3 || $aa == 9){
		echo "valid Number\n";
		}
		else{
			echo "please enter a valid number\n";
			$aa = fgets(STDIN);
			contacts($aa);
			}
	}
	function cases($aa){
	if($aa == 1 || $aa == 2 || $aa == 3 || $aa == 9){
		echo "valid Number\n";
		}
		else{
			echo "please enter a valid number\n";
			$aa = fgets(STDIN);
			cases($aa);
			}
}
