<!DOCTYPE html>
<html>
<body>

<?php
$connection = @mysqli_connect (localhost, root, Jc2011368, login);
if(mysqli_connect_errno())
{
echo "<h4>Failed to connect to MySQL:
</h4>".mysqli_connect_error();
}
else
{
echo "<h4>Successfully connected to MySQL: </h4>";
}

$email = $_REQUEST['email']; 
$user = $_REQUEST['user']; 
$pass = $_REQUEST['pass']; 
$cpass = $_REQUEST['cpass']; 

if($pass = $cpass)
{
	$query = "insert into login (email, username, password) values('$email','$user','$pass');";
	$resultset = mysqli_query($connection, $query);
	if($resultset){
	    echo "Records added successfully.";
	} 
	else{
	    echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
	}
}
else
{
echo "Passwords don't match";
}
mysqli_close($connection);
?>

</body>
</html>