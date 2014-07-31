<?php
	$first = $_REQUEST['first'];
	$last = $_REQUEST['last'];
	$alias = $_REQUEST['alias'];
	$email = $_REQUEST['email'];
	$username = $_REQUEST['username'];
	$nickname = $_REQUEST['nickname'];
	$language = $_REQUEST['language'];
	
	if($first && $last && $alias && $email && $username && $nickname && $language){

		include("validation.php");
		validateEmail($email);
		validateUsername($first,$last,$username);
		validateNickname($first,$last,$nickname);

		include("connection.php");
		
		$result = pg_query("INSERT INTO users(first,last,alias,email,username,nickname,language) VALUES('$first', '$last', '$alias', '$email', '$username', '$nickname', '$language')");
		$registered = pg_affected_rows($result);
		if($registered){
			$permissions = pg_query("INSERT INTO permissions(username) VALUES('$username')");
		}
		$permission_success = pg_affected_rows($permissions);
		echo "$registered row was inserted and $permission_success row was inserted <br />";
		if($registered && $permission_success){
			echo "You have successfully registered <br />";
			echo "Name: $first $last <br />";
			echo "Alias: $alias <br />";
			echo "Email: $email <br />";
			echo "Username: $username <br />";
			echo "Nickname: $nickname";
			send_remote_syslog("Username $username was created");
		} else {
			echo "Registration Failed. Try again later or username, email, or nickname already exists";
			send_remote_syslog("Failed to create entry in db");
		}
	
		pg_close();

	} else {
		echo "You have to complete the form!";
	}

	include("links.php");
?>

