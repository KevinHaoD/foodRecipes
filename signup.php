<!--signup.html-->
<!DOCTYPE html>
<html>
<body>

<?php
$connection = @mysqli_connect (localhost, root, BuffTech, login);
if(mysqli_connect_errno())
{
	mysqli_connect_error();
}


$email = $_REQUEST['email']; 
$user = $_REQUEST['user']; 
$pass = $_REQUEST['pass']; 
$cpass = $_REQUEST['cpass']; 


if($pass == $cpass)
{
	$query = "insert into login (email, username, password) values('$email','$user','$pass');";
	$resultset = mysqli_query($connection, $query);
	if($resultset){
	    echo "Account Created";
	    echo"<br>";
		echo "<a href='Project.php'>Back to sign in</a>";
	} 
	else{
	    echo "ERROR: Could not able to execute $query. " . mysqli_error($connection);
	    echo"<br>";
	   echo "<a href='Project.php'>Try again</a>";
	}
}
else
{
echo "Passwords don't match";
echo"<br>";
echo "<a href='Project.php'>Try again</a>";
}
mysqli_close($connection);
?>

</body>
</html>
