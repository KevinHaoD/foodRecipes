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
?> 

<html>
<head>
<title>Account Login</title>
</head>
<h1 align="center">Kitchen</h1>
<body id="body-color"> 
<div id="Sign In" align="center"> 
<fieldset style="width:30%" align="center"><legend>Sign In</legend> 
<table border="0"> <tr> <form method="POST" enctype="multipart/form-data" action="login.php"> 
<tr> 
<td>Username</td><td> <input type="text" name="user"></td> 
</tr> 
<tr> 
<td>Password</td><td> <input type="password" name="pass"></td> 
</tr> 
<td><input id="button" type="submit" name="submit" value="Sign In"></td> 
</form>
</table>
</fieldset>
</div>
</body>
<h3 align="center">OR</h3>
</html>

<html> 
<head> 
<title>Sign-Up</title> 
</head> 
<body id="body-color"> 
<div id="Sign Up" align="center"> 
<fieldset style="width:30%" align="center"><legend>Sign Up</legend> 
<table border="0"> <tr> <form method="POST" enctype="multipart/form-data" action="signup.php"> 
<tr> 
<td>Email</td><td> <input type="text" name="email"></td> 
</tr>
<tr> 
<td>Username</td><td> <input type="text" name="user"></td> 
</tr> 
<tr> 
<td>Password</td><td> <input type="password" name="pass"></td> 
</tr> 
<tr> 
<td>Confirm Password </td><td><input type="password" name="cpass"></td> 
</tr> 
<tr> 
<td><input id="button" type="submit" name="submit" value="Sign Up"></td> 
</tr> 
</form> 
</table> 
</fieldset> 
</div> 
</body> 
</html>

