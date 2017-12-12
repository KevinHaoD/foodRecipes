<?php
	//deleteHandler.php
	$connection = @mysqli_connect (localhost, root, Jc2011368, login);
	if(mysqli_connect_errno())
	{
		mysqli_connect_error();
	}
	$delete = $_REQUEST['id'];
	mysqli_query($connection, "DELETE FROM yourRecipes WHERE food = '$delete'");
	mysqli_query($connection, "DELETE FROM food WHERE name = '$delete'");
	echo "<script type='text/javascript'>alert('Successfully deleted recipe!');</script>";
	include "yourRecipes.php";
?>