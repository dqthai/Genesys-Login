<?php

	$username = $_REQUEST['username'];
	$first = "";
	$last = "";
	$alias = "";
	$email = "";
	$nickname = "";
	$langage = "";
	$usertype = "";
	
	include("sforce_connection.php");
	$query = "SELECT FirstName, LastName, Email, Alias, CommunityNickname, UserType, LanguageLocaleKey FROM User WHERE Username='$username'";
	$response = $mySforceConnection->query($query);
	foreach($response as $record) {
		$first = $record->FirstName;
		$last = $record->LastName;
		$alias = $record->Alias;
		$email = $record->Email;
		$nickname = $record->CommunityNickname;
		$language = $record->LanguageLocaleKey;
		$usertype = $record->UserType;
	}
?>
