<?php
//Project.php
session_destroy();
$connection = @mysqli_connect (localhost, root, Jc2011368, login);
if(mysqli_connect_errno())
{
	mysqli_connect_error();
}
?> 

<html>
<head>
<title>Account Login</title>
</head>
<style>
h1{
	background-color: #D4AF37
}
body{
	margin: 0px
}
</style>
<h1 align="center" style="color:#ffffff;">RecipeWiki<img src="https://i.imgur.com/lmQgOFd.png" style=width:65px;height:40px></h1>
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

