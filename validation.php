<?php

function validateEmail($email){
 	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo "This is not a valid email address.";
			echo "<br />";
			echo "Please go back and sumbit a valid email address.";
			exit;
	}
}

function validateUsername($first, $last, $username){
	$checkValid = "$first"."."."$last"."@42demo.com";
	$username = strtolower($username);
	$checkValid = strtolower($checkValid);
	if(!($username == $checkValid)){
		echo "This is not a valid username.";
		echo "<br />";
		echo "Please go back and sumbit a valid username in the form (firstname.lastname@42demo.com).";
		exit;
	}
}

function validateNickname($first, $last, $nickname){
	$first_letter = substr($first,0,1);
	$checkValid = "$first_letter"."$last"."_42demo";
	$nickname = strtolower($nickname);
	$checkValid = strtolower($checkValid);
	if(!($nickname == $checkValid)){
		echo "This is not a valid nickname.";
		echo "<br />";
		echo "Please go back and sumbit a valid nickname in the form (1st letter of firstname + lastname + _42demo).";
		exit;
	}
}

function validatePassword($password, $cpassword) {
  if($password != $cpassword) {
    echo "Please verify your password again";
    exit;
  }
}
?>




