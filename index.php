<?php

function pg_connection_string(){
	return  "dbname=d9obju9qqjs2bl host=ec2-23-23-183-5.compute-1.amazonaws.com port=5432 user=hjaabcekfmalra password=IAQJ5iBAKcazgisvh5PQeSWAdV sslmode=require";
}

$db = pg_connect(pg_connection_string());
if(!$db) {
	echo "Database connection error";
	exit;
}
echo "Successful connection";

$result = pg_query("SELECT * FROM users");
while($row = pg_fetch_array($result)){
	echo $row['lName']." ".$row['fName']." ".$row['alias']." ".$row['email']." ".$row['username']." ".$row['nickname']." ".$row['language'];
	echo "<br />";
}

pg_close();
include("form.php");
?>

