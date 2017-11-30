<?php
$connection = @mysqli_connect (localhost, dara6996@colorado.edu, danraf12, loginAccounts); 

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
	$email = $_POST['email'];
	$password =  $_POST['password'];
	$query = "INSERT INTO user (email,password) VALUES ('$email','$password')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM user WHERE email = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
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
	SignUp();
}

?>


