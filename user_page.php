<html>

	<body>
		<h3><?php echo $_POST['usernames']; ?></h3>

		<form method="POST" action="sync.php">
			<table border="0" width="60%">

				<tr><td width="30%">Name: </td>
				<td><?php echo $_POST['firsts']." ".$_REQUEST['lasts']; ?></td></tr>

				<tr><td width="30%">Alias: </td>
				<td><?php echo $_POST['aliass'];?> </td></tr>
				
				<tr><td width="30%">Email: </td>
				<td><?php echo $_POST['emails'];?> </td></tr>

				<tr><td width="30%">Nickname: </td>
				<td><?php echo $_POST['nicknames'];?> </td></tr>
				
				<tr><td width="30%">Usertype: </td>
				<td><?php echo $_POST['usertypes'];?> </td></tr>
				
				<tr><td width="30%">Language: </td>
				<td><?php echo $_POST['languages'];?> </td></tr>
				
			</table><p>

			<input type="submit" value="Sync to external database" />
			<input type="hidden" name="id" value="<?php echo $_POST['ids'];?>">
			<input type="hidden" name="first" value="<?php echo $_POST['firsts'];?>">
			<input type="hidden" name="last" value="<?php echo $_POST['lasts'];?>">
			<input type="hidden" name="alias" value="<?php echo $_POST['aliass'];?>">
			<input type="hidden" name="email" value="<?php echo $_POST['emails'];?>">
			<input type="hidden" name="username" value="<?php echo $_POST['usernames'];?>">
			<input type="hidden" name="nickname" value="<?php echo $_POST['nicknames'];?>">
			<input type="hidden" name="usertype" value="<?php echo $_POST['usertypes'];?>">
			<input type="hidden" name="language" value="<?php echo $_POST['languages'];?>">
		</form>
	</body>

</html>

<?php
	include("links.php");
?>
