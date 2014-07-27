<?php

function pg_connection_string(){
	return  "dbname=d9obju9qqjs2bl host=ec2-23-23-183-5.compute-1.amazonaws.com port=5432 user=hjaabcekfmalra password=IAQJ5iBAKcazgisvh5PQeSWAdV sslmode=require";
}

$db = pg_connect(pg_connection_string());
if(!$db) {
	echo "Database connection error";
	exit;
}

$result = pg_query("SELECT * FROM users");
echo "<table width=\"90%\" align=center border=2>";
			echo "<tr><td width=\"40%\" align=center bgcolor =\"FFFF00\">ID</td>
			<td width=\"40%\" align=center bgcolor =\"FFFF00\">FIRST NAME</td>
			<td width=\"40%\" align=center bgcolor =\"FFFF00\">LAST NAME</td>
			<td width=\"40%\" align=center bgcolor =\"FFFF00\">ALIAS</td>
			<td width=\"40%\" align=center bgcolor =\"FFFF00\">EMAIL</td>
			<td width=\"40%\" align=center bgcolor =\"FFFF00\">USERNAME</td>
			<td width=\"40%\" align=center bgcolor =\"FFFF00\">NICKNAME</td>
			<td width=\"40%\" align=center bgcolor =\"FFFF00\">LANGUAGE</td></tr>";
			
			while($row=pg_fetch_array($result)){
				$fName=$row['fName'];
				$lName=$row['lName'];
				$alias=$row['alias'];
				$email=$row['email'];
				$username=$row['username'];
				$nickname=$row['nickname'];
				$language=$row['language'];
				echo "<tr><td>$fName</td><td>$lName</td><td>$alias</td><td>$email</td><td>$username</td><td>$nickname</td><td>$language</td></tr>";	
			} 
			echo "</table>";

pg_close();

include("links.php");
?>
