<!DOCTYPE html>
<html>
<body>

<?php
$connection = @mysqli_connect (localhost, root, BuffTech, login);
if(mysqli_connect_errno())
{
echo "<h4>Failed to connect to MySQL:
</h4>".mysqli_connect_error();
}
else
{
echo "<h4>Successfully connected to MySQL: </h4>";
}

$user = $_REQUEST['user']; 
$pass = $_REQUEST['pass'];
$queryU = mysqli_query($connection, "SELECT username FROM login WHERE username = '$user'");
$queryP = mysqli_query($connection, "SELECT password FROM login WHERE password = '$pass'");
$u = mysqli_fetch_array($queryU);
$p = mysqli_fetch_array($queryP);

if($u["username"] == $user and $u["password"] == $pass){	
	echo "Login Successful";
}
else{
	echo "Username or password is incorrect";
}
mysqli_close($connection);
/*
if(mysqli_connect_errno())
{ 
echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error(); 
} 
else 
{ 
echo "<h4>Successfully connected to MySQL: </h4>"; 
} 


function NewUser()
{	
	
	$connect = @mysqli_connect (localhost, root, Jc2011368, login);#You have to put your password in between root, and loginAccounts for this to work
	$email = $_POST['email'];
	$password =  $_POST['password'];
	$query = "INSERT INTO user (email,password) VALUES ('$email','$password')";
	$data = mysqli_query ($connect, $query); #or die(mysqli_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}
#This function does not work yet so I skipped calling it in the if statement below it and just called NewUser() instead -Joel
function SignUp()
{
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysqli_query("SELECT * FROM user WHERE email = '$_POST[email]' AND pass = '$_POST[password]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysqli_error()))
	{
		NewUser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	echo "<h4>Successfully received submit: </h4>";
	NewUser();
}
*/
?>

</body>
<html>

