include("query_username.php");
<html>

	<body>
		<h3><?php echo $_POST['usernames']; ?></h3>

		<form method="POST" action="sync.php">
			<table border="0" width="60%">

				<tr><td width="30%">Name: </td>
				<td><?php echo $first." ".$last; ?></td></tr>

				<tr><td width="30%">Alias: </td>
				<td><?php echo $alias;?> </td></tr>
				
				<tr><td width="30%">Email: </td>
				<td><?php echo $email;?> </td></tr>

				<tr><td width="30%">Nickname: </td>
				<td><?php echo $nickname;?> </td></tr>
				
				<tr><td width="30%">Usertype: </td>
				<td><?php echo $usertype;?> </td></tr>
				
				<tr><td width="30%">Language: </td>
				<td><?php echo $language;?> </td></tr>
				
			</table><p>

			<input type="submit" value="Sync to external database" />
			<input type="hidden" name="first" value="<?php echo $first;?>">
			<input type="hidden" name="last" value="<?php echo $last;?>">
			<input type="hidden" name="alias" value="<?php echo $alias;?>">
			<input type="hidden" name="email" value="<?php echo $email;?>">
			<input type="hidden" name="username" value="<?php echo $username;?>">
			<input type="hidden" name="nickname" value="<?php echo $nickname;?>">
			<input type="hidden" name="usertype" value="<?php echo $usertype;?>">
			<input type="hidden" name="language" value="<?php echo $language;?>">
		</form>
	</body>

</html>

<?php
	include("links.php");
?>
