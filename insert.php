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

		//include("connection.php");
		include("sforce_connection.php");
					
		$sObject =  new stdclass();
		$sObject->Username = $username;
		$sObject->LastName = $last;
		$sObject->FirstName = $first;
		$sObject->Email = $email;
    $sObject->Alias = $alias;
    $sObject->CommunityNickname = $nickname;
    $sObject->IsActive = 'true';
    $sObject->TimeZoneSidKey = 'America/New_York';
    $sObject->LocaleSidKey = 'en_US';
    $sObject->EmailEncodingKey = 'ISO-8859-1';
    $sObject->ProfileId = '00e80000000pdX4AAI';
    $sObject->LanguageLocaleKey = 'en_US';
    
    $createResponse = $mySforceConnection->create(array($sObject), 'User');
    
    echo "\nAdded: \n";
    $ids = array();
    foreach($createResponse as $createResult){
      print_r($createResult);
      array_push($ids, $createResult->id);
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
		//pg_close();

	} else {
		echo "You have to complete the form!";
	}
 
	include("links.php");
?>

