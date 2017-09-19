<?php
function mainMenu($a){
	echo "Choose one of the the options in the list below \n";
	echo "Choose 1 for accounts  \n ";
	echo "Choose 2 for contacts \n ";
	echo "Choose 3 for cases \n ";
	$a=fgets(STDIN);
	validateMainMenu($a);
	}
function subMenu($c){
	if($a == 1){
		echo "Choose one of the the options in the list below \n";
		echo "Choose 1 for creating accounts  \n ";
		echo "Choose 2 for editing accounts \n ";
		echo "Choose 3 for viewing accounts \n ";
		echo "Choose 9 to go back to main menu\n";
		$c = fgets(STDIN);
		account($c);
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
function createAccount($z){
	
	}
function validateMainMenu($b){
	 if($b==1 || $b==2 || $b == 3){ 
		echo "valid number\n";
		return ();
		}
		else {
		echo "Please enter a valid number";
		$b = fgets(STDIN);
		return (mainMenu($b));
		}
	}
function account($aa){
	if($aa == 1 || $aa == 2 || $aa == 3 || $aa == 9){
		echo "valid Number\n";
		detailedAccountMenu($x);
		}
		else{
			echo "please enter a valid number\n";
			$aa = fgets(STDIN);
			account($aa);
			}
		return $aa;
	}	
?>
