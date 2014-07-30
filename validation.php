<?php

function validateEmail($email){
 	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "This is not a valid email address\n";
			echo "Please go back and sumbit a valid email address";
			exit;
	}
}

function validateUsername($first, $last, $username){
	if(!($username == "$first"."$last"."@94demo.com")){
		echo "$username";
		echo "$first"."$last"."@94demo.com";
		echo "This is not a valid username\n";
		echo "Please go back and sumbit a valid username in the form (firstname.lastname@94demo.com)";
		exit;
	}
}

function validateNickname($first, $last, $nickname){
	if(!($nickname == substr($first,0,0).$last."_94demo")){
		echo "This is not a valid nickname\n";
		echo "Please go back and sumbit a valid nickname in the form (1st letter of firstname + lastname + _94demo)";
		exit;
	}
}

?>




