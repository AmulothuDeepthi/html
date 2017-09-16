<?php
function mainMenu($a){
	echo "Choose one of the the options in the list below \n";
	echo "Choose 1 for accounts  \n ";
	echo "Choose 2 for contacts \n ";
	echo "Choose 3 for cases \n ";
	$a=fgets(STDIN);
	validateMainMenu($a);
	}
?>
