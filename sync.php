<?php

	$username = $_REQUEST['username'];
	$first = $_REQUEST['first'];
	$last = $_REQUEST['last'];
	$alias = $_REQUEST['alias'];
	$email = $_REQUEST['email'];
	$nickname = $_REQUEST['nickname'];
	$usertype = $_REQUEST['usertype'];
	$language = $_REQUEST['language'];

	include("connection.php");

	$result = pg_query("INSERT INTO users(first, last, alias, email, username, nickname, usertype, language) VALUES('$first', '$last', '$alias', '$email', '$username', '$nickname', '$usertype', '$language')");
	$registered = pg_affected_rows($result);
	if($registered) {
		echo "Your values have been updated successfully!";
	}
	
	pg_close();
	include('links.php');
?>
