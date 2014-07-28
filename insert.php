<?php
	$first = $_REQUEST['first'];
	$last = $_REQUEST['last'];
	$alias = $_REQUEST['alias'];
	$email = $_REQUEST['email'];
	$username = $_REQUEST['username'];
	$nickname = $_REQUEST['nickname'];
	$language = $_REQUEST['language'];
	
	if($first && $last && $alias && $email && $username && $nickname && $language){
	  function pg_connection_string(){
		return  "dbname=d9obju9qqjs2bl host=ec2-23-23-183-5.compute-1.amazonaws.com port=5432 user=hjaabcekfmalra password=IAQJ5iBAKcazgisvh5PQeSWAdV sslmode=require";
}

	$db = pg_connect(pg_connection_string());
		if(!$db) {
			echo "Database connection error";
			exit;
		}
	$result = pg_query("INSERT INTO users(first,last,alias,email,username,nickname,language) VALUES('$first', '$last', '$alias', '$email', '$username', '$nickname', '$language')");
	$permissions = pg_query("INSERT INTO permissions(username, userlicense,profile,serviceclouduser,salesforce1user,callcenter) VALUES('$username', 'Salesforce', 'Genesys Demo User', 'YES', 'YES', Genesys Gplus for Salesforce.com)");
	$registered = pg_affected_rows($result);
	$permission_success = pg_affected_rows($permissions);
	echo "$registered row was inserted and $permissions_success row was inserted";
	} else {
		echo "you have to complete the form!";
	}
	pg_close();

	include("links.php");
?>

