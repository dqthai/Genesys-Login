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
//$permissions = pg_query("SELECT * FROM permissions");
			echo "<table width=\"90%\" align=center border=2>";
			echo "<tr><td width=\"20%\" align=center bgcolor =\"FFFF00\">FIRST NAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">LAST NAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">ALIAS</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">EMAIL</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">USERNAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">NICKNAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">LANGUAGE</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">USER LICENSE</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">PROFILE</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">SERVICE CLOUD USER</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">SALESFORCE1 USER</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">CALL CENTER</td></tr>";
			
			while($row=pg_fetch_array($result) /*|| $row1=pg_fetch_array($permissions)*/){
				$first=$row['first'];
				$last=$row['last'];
				$alias=$row['alias'];
				$email=$row['email'];
				$username=$row['username'];
				$nickname=$row['nickname'];
				$language=$row['language'];
				/*$user_license=$row1['user_license'];
				$profile=$row1['profile'];
				$service_cloud_user=$row1['service_cloud_user'];
				$salesforce1_user=$row1['salesforce1_user'];
				$call_center=$row1['call_center'];*/
				echo "<tr><td>$first</td><td>$last</td><td>$alias</td><td>$email</td><td>$username</td><td>$nickname</td><td>$language</td></tr>";	
			} 
			echo "</table>";

pg_close();

include("links.php");
?>
