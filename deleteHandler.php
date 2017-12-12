<?php
	$connection = @mysqli_connect (localhost, root, Jc2011368, login);
	if(mysqli_connect_errno())
	{
		mysqli_connect_error();
	}
	$delete = $_REQUEST['id'];
	echo $delete;
	mysqli_query($connection, "DELETE FROM yourRecipes WHERE food = '$delete'");
	include "yourRecipes.php";
?>