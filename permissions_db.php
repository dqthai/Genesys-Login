<?php

$permissions = pg_query("SELECT * FROM permissions");
			echo "<h3>USER'S PERMISSIONS</h3>";
			echo "<table width=\"90%\" align=center border=2>";
			echo "<tr>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">USERNAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">USER LICENSE</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">PROFILE</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">SERVICE CLOUD USER</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">SALESFORCE1 USER</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">CALL CENTER</td></tr>";

while($row1=pg_fetch_array($permissions)){
				$username=$row1['username'];
				$user_license=$row1['user_license'];
				$profile=$row1['profile'];
				$service_cloud_user=$row1['service_cloud_user'];
				$salesforce1_user=$row1['salesforce1_user'];
				$call_center=$row1['call_center'];
				echo "<tr><td>$username</td><td>$user_license</td><td>$profile</td><td>$service_cloud_user</td><td>$salesforce1_user</td><td>$call_center</td></tr>";		
}
				echo "</table>";
	
?>
