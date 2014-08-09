<?php
$query = "SELECT Username, FirstName, LastName, Email, Alias, CommunityNickname, UserType, LanguageLocaleKey from User";
$response = $mySforceConnection->query($query);
			echo "<h3>USERS</h3>";
			echo "<table width=\"90%\" align=center border=2>";
			echo "<tr>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">FIRST NAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">LAST NAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">ALIAS</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">EMAIL</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">USERNAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">NICKNAME</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">UserType</td>
			<td width=\"20%\" align=center bgcolor =\"FFFF00\">LANGUAGE</td></tr>";
			
			foreach($response as $record) {
			  $first = $record->FirstName;
			  $last = $record->LastName;
			  $alias = $record->Alias;
			  $email = $record->Email;
			  $username = $record->Username;
			  $nickname = $record->CommunityNickname;
			  $language = $record->LanguageLocaleKey;
			  $usertype = $record->UserType;
			  echo "<tr><td>$first</td><td>$last</td><td>$alias</td><td>$email</td><td>$username</td><td>$nickname</td><td>$usertype</td><td>$language</td></tr>";
			}

			echo "</table>";

?>
