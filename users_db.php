<?php

$result = pg_query("SELECT * FROM users");
			echo "<h3>USERS</h3>";
			echo "<table width=\"90%\" align=center border=2>";
			echo "<tr>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">ID</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">FIRST NAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">LAST NAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">ALIAS</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">EMAIL</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">USERNAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">NICKNAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">LANGUAGE</td></tr>";
			
			while($row=pg_fetch_array($result)){
				$id=$row['id'];
				$first=$row['first'];
				$last=$row['last'];
				$alias=$row['alias'];
				$email=$row['email'];
				$username=$row['username'];
				$nickname=$row['nickname'];
				$language=$row['language'];
				echo "<tr><td>$id</td><td>$first</td><td>$last</td><td>$alias</td><td>$email</td><td>$username</td><td>$nickname</td><td>$language</td></tr>";	
			} 
			echo "</table>";

?>