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

$name = $_REQUEST['name'];
$email = $_REQUEST['email']; 
$user = $_REQUEST['user']; 
$pass = $_REQUEST['pass']; 
$cpass = $_REQUEST['cpass']; 

if($pass = $cpass)
{
	$query = "insert into login (name, email, user, pass) values('$name','$email','$user','$pass');";
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
/*

function NewUser() { 
	$name = $_POST['name']; 
	$user = $_POST['user']; 
	$email = $_POST['email']; 
	$pass = $_POST['pass']; 
	$query = "INSERT INTO login (name,email,user,pass) VALUES ('$name','$email','$user','$pass')"; 
	$data = mysql_query ($query)or die(mysql_error()); 
	if($data) { 
	echo "YOUR REGISTRATION IS COMPLETED..."; 
	} 
} 
function SignUp() { 
if(!empty($_POST['user'])){ 
$query = mysql_query("SELECT * FROM login WHERE user = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
if(!$row = mysql_fetch_array($query) or die(mysql_error())) {
	NewUser(); 
} 
else {
echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
} 
} 
} 
if(isset($_POST['submit'])) {
 SignUp(); 
}
*/
?>

</body>
</html>