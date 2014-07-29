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
		$permissions = pg_query("INSERT INTO permissions(username) VALUES('$username')");
		$registered = pg_affected_rows($result);
		$permission_success = pg_affected_rows($permissions);
		echo "$registered row was inserted and $permission_success row was inserted <br />";
		if($registered && $permission_success){
			echo "You have successfully registered <br />";
			echo "Name: $first $last <br />";
			echo "Alias: $alias <br />";
			echo "Email: $email <br />";
			echo "Username: $username <br />";
			echo "Nickname: $nickname";

			$file = 'log.txt';
			$data = "Name: $first $last\nAlias: $alias\nEmail: $email\nUsername: $username\n Nickname: $nickname\n";	
			$download_me = "download";
			file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
			header("Content-type: text/plain");
  			header("Content-Disposition: attachment; filename='log.txt'");
			
  			echo $download_me;
			
		} else {
			echo "Registration Failed. Try again later or username already exists";
		}
	} else {
		echo "you have to complete the form!";
	}
	pg_close();

	include("links.php");
?>

