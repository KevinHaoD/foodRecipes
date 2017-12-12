<?php
	//search.php
	include "menuBar.php";
?>
<html>
<style>
button{
	float: right;
}
</style>
<div2 style="margin:30px;float:left">
<script type="text/javascript">
function toggleMe(a){
var e=document.getElementById(a);
if(!e)return true;
if(e.style.display=="none"){
e.style.display="block"
}
else{
e.style.display="none"
}
return true;
}
</script>
<script>
function goBack() {
    window.history.back();
}
</script>

<?php
$connection = @mysqli_connect (localhost, root, Jc2011368, login);
if(mysqli_connect_errno())
{
echo "<h4>Failed to connect to MySQL:
</h4>".mysqli_connect_error();
}

$search = $_REQUEST['food'];
$queryN = mysqli_query($connection, "SELECT *  FROM food WHERE name LIKE '%$search%'");

if(mysqli_num_rows($queryN)>0){
	while($row =  mysqli_fetch_array($queryN,MYSQLI_NUM))
	{
		echo "<form action = page.php> <input type=submit name=submit  value='$row[0]'></form>";
		echo $row[32]."<br><br><br>";
	}
}
else{
	echo "No recipes found<br>";
	echo '<form action="Add.php" method="POST">
	<input type="submit" name="submit" value="Add Recipe!">
	</form>';
}
echo '</div2>';
echo '<button onclick="goBack()" style="float:right;margin:30px">Go Back</button>';
mysqli_close($connection);
?>
</html>
