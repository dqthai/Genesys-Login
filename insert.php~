<?php
	$first = $_REQUEST['first'];
	$last = $_REQUEST['last'];
	$alias = $_REQUEST['alias'];
	$email = $_REQUEST['email'];
	$username = $_REQUEST['username'];
	$nickname = $_REQUEST['nickname'];
	$language = $_REQUEST['language'];
	$user_license = "Salesforce";
	$profile = "Genesys Demo User";
	$service_cloud_user = "YES";
	$salesforce1_user = "YES";
	$call_center = "Genesys Gplus for Salesforce.com";
	
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
	$registered = pg_affected_rows($result);
	echo "$registered row was inserted";
	} else {
		echo "you have to complete the form!";
	}
	pg_close();

	include("links.php");
?>

