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
$permissions = pg_query("SELECT * FROM permissions");
			echo "<table width=\"90%\" align=center border=2>";
			echo "<tr>
			<td width=\"40%\" align=center bgcolor =\"FFFF00\">USER LICENSE</td>
			</tr>";
			
			while($row=pg_fetch_array($result) || $row1=pg_fetch_array($permissions)){
				$first=$row['first'];
				$last=$row['last'];
				$alias=$row['alias'];
				$email=$row['email'];
				$username=$row['username'];
				$nickname=$row['nickname'];
				$language=$row['language'];
				$user_license=$permissions['user_license'];
				$profile=$permissions['profile'];
				$service_cloud_user=$permissions['service_cloud_user'];
				$salesforce1_user=$permissions['salesforce1_user'];
				$call_center=$permissions['call_center'];
				echo "<tr><td>$user_license</td></tr>";	
			} 
			echo "</table>";

pg_close();

include("links.php");
?>
