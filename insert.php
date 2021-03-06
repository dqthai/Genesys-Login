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
    $sObject->ProfileId = '00eo0000000p8fE';
    $sObject->LanguageLocaleKey = 'en_US';
    
    $SaveResult = $mySforceConnection->create(array($sObject), 'User');
    
    foreach($SaveResult as $createResult){
      send_remote_syslog(print_r($createResult, true));
      //var_dump(get_object_vars($createResult));
      if($createResult->success) {
   			echo "You have successfully registered <br />";
  			echo "Name: $first $last <br />";
  			echo "Alias: $alias <br />";
  			echo "Email: $email <br />";
  			echo "Username: $username <br />";
  			echo "Nickname: $nickname";
  			$userid = $createResult->id;
  			try {
      				$result = $mySforceConnection->resetPassword($userid);
      				$password = $result->getpassword();
      				echo "The password is $password";
				echo "\nEmail with your password has been sent.\n";
			} catch(Exception $e) {
			      echo $e->faultstring;
    			}
  			send_remote_syslog("$username has been created successfully.");
      } else {
        echo $createResult->errors[0]->message;
        send_remote_syslog("Failed to create new account.");
      }
    }
    
	pg_close();

	} else {
		echo "You have to complete the form!";
	}
 
	include("links.php");
?>

