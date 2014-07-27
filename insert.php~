<?php
	$fName = $_REQUEST['fName'];
	$lName = $_REQUEST['lName'];
	$alias = $_REQUEST['alias'];
	$email = $_REQUEST['email'];
	$username = $_REQUEST['username'];
	$nickname = $_REQUEST['nickname'];
	$language = $_REQUEST['language'];
	
	echo $fName." ".$lName;
	
	if($fName && $lName && $alias && $email && $username && $nickname && $language){
	  function pg_connection_string(){
		return  "dbname=d9obju9qqjs2bl host=ec2-23-23-183-5.compute-1.amazonaws.com port=5432 user=hjaabcekfmalra password=IAQJ5iBAKcazgisvh5PQeSWAdV sslmode=require";
}

	$db = pg_connect(pg_connection_string());
		if(!$db) {
			echo "Database connection error";
			exit;
		}
	$result = pg_query("INSERT INTO users(fName,lName,alias,email,username,nickname,language) VALUES('$fName', '$lName', '$alias', '$email', '$username', '$nickname', '$language')");
	$registered = pg_affected_rows($result);
	echo "$registered row was inserted";
	} else {
		echo "you have to complete the form!";
	}
	pg_close();

	include("links.php");
?>

