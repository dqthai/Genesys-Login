<html>

	<body>
		<h3><?php echo $_REQUEST['usernames']; ?></h3>

		<form method="POST" action="sync.php">
			<table border="0" width="60%">

				<tr><td width="30%">Name: </td>
				<td><?php echo $_REQUEST['firsts']." ".$_REQUEST['lasts']; ?></td></tr>

				<tr><td width="30%">Alias: </td>
				<td><?php echo $_REQUEST['aliass'];?> </td></tr>
				
				<tr><td width="30%">Email: </td>
				<td><?php echo $_REQUEST['emails'];?> </td></tr>

				<tr><td width="30%">Nickname: </td>
				<td><?php echo $_REQUEST['nicknames'];?> </td></tr>
				
				<tr><td width="30%">Usertype: </td>
				<td><?php echo $_REQUEST['usertypes'];?> </td></tr>
				
				<tr><td width="30%">Language: </td>
				<td><?php echo $_REQUEST['languages'];?> </td></tr>
				
			</table><p>

			<input type="submit" value="Sync to external database" />
			<input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?>">
			<input type="hidden" name="first" value="<?php echo $_REQUEST['firsts'];?>">
			<input type="hidden" name="last" value="<?php echo $_REQUEST['lasts'];?>">
			<input type="hidden" name="alias" value="<?php echo $_REQUEST['aliass'];?>">
			<input type="hidden" name="email" value="<?php echo $_REQUEST['emails'];?>">
			<input type="hidden" name="username" value="<?php echo $_REQUEST['usernames'];?>">
			<input type="hidden" name="nickname" value="<?php echo $_REQUEST['nicknames'];?>">
			<input type="hidden" name="usertype" value="<?php echo $_REQUEST['usertypes'];?>">
			<input type="hidden" name="language" value="<?php echo $_REQUEST['languages'];?>">
		</form>
	</body>

</html>

<?php
	include("links.php");
?>
