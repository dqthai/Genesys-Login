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
		include("sforce_connection.php");
		
		$new_user =  new stdclass();
		$new_user->Username = $username;
		$new_user->Last = $last;
		$new_user->First = $first;
		$new_user->Email = $email;
    $new_user->Alias = $alias;
    $new_user->CommunityNickname = $nickname;
    $new_user->IsActive = 'true';
    $new_user->TimeZoneSidKey = 'America/New_York';
    $new_user->LocalSIdKEy = 'en_US';
    $new_user->EmailEncodingKey = 'ISO-8859-1';
    $new_user->ProfileId = '00e80000000pdX4AAI';
    
    $response = $mySforceConnection->create($new_user, "User");
		echo $response;
		if($response){
			echo "You have successfully registered <br />";
			echo "Name: $first $last <br />";
			echo "Alias: $alias <br />";
			echo "Email: $email <br />";
			echo "Username: $username <br />";
			echo "Nickname: $nickname";
			send_remote_syslog("Username $username was created");
			send_remote_syslog("Default permissions for $username set successfully");
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

