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
$query = pg_query($db, "SELECT fName, lName, alias, email, username, nickname, language "."FROM users ORDER BY lName ASC, fName ASC" );
$result = $db = $result->fetch(PDO::FETCH_ASSOC)){
	echo "<tr>";
	echo "<td>".$row["lName"]. "</td>";
	echo "<td>". htmlspecialchars($row["fName"]) . "</td>";
	echo "<td>". htmlspecialchars($row["alias"]) . "</td>";
	echo "<td>". htmlspecialchars($row["email"]) . "</td>";
	echo "<td>". htmlspecialchars($row["username"]) . "</td>";
	echo "<td>". htmlspecialchars($row["nickname"]) . "</td>";
	echo "<td>". htmlspecialchars($row["language"]) . "</td>";
	echo "</tr>";
}
$result->closeCursor();
include("form.php");
?>

