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
		
		$new_user = array();
		
		$new_user[0] =  new stdclass();
		$new_user[0]->Username = $username;
		$new_user[0]->LastName = $last;
		$new_user[0]->FirstName = $first;
		$new_user[0]->Email = $email;
    $new_user[0]->Alias = $alias;
    $new_user[0]->CommunityNickname = $nickname;
    $new_user[0]->IsActive = 'true';
    $new_user[0]->TimeZoneSidKey = 'America/New_York';
    $new_user[0]->LocaleSidKey = 'en_US';
    $new_user[0]->EmailEncodingKey = 'ISO-8859-1';
    $new_user[0]->ProfileId = '00e80000000pdX4AAI';
    $new_user[0]->LanguageLocaleKey = 'en_US';
    
    $response = $mySforceConnection->create($new_user, 'User');
    
    echo "\nAdded: \n";
    $ids = array();
    foreach($response as $i => $result){
      echo $new_user[$i]->Username. "<br />\n";
      array_push($ids, $result->id);
    }
    
		/*echo $response;
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
    */	
		pg_close();

	} else {
		echo "You have to complete the form!";
	}
 
	include("links.php");
?>

