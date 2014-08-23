<?php

$query = pg_query("SELECT * FROM users");
			echo "<h3>EXTERNAL DATABASE</h3>";
			echo "<table width=\"90%\" align=center border=2>";
			echo "<tr>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">USERNAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">FIRST</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">LAST</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">ALIAS</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">EMAIL</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">NICKNAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">USERTYPE</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">LANGUAGE</td></tr>";

while($row=pg_fetch_array($query)){
				$username=$row['username'];
				$first=$row['first'];
				$last=$row['last'];
				$alias=$row['alias'];
				$email=$row['email'];
				$nickname=$row['nickname'];
				$usertype=$row['usertype'];
				$language=$row['language'];
				echo "<tr><td>$username</td><td>$first</td><td>$last</td><td>$aliasr</td><td>$email</td><td>$nickname</td><td>$usertype</td><td>$language</td></tr>";		
}
				echo "</table>";
	
?>
