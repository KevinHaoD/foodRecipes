<html>
<style>
button{
	float: right;
}
</style>
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
include "menuBar.php";
$connection = @mysqli_connect (localhost, root, BuffTech, login);
if(mysqli_connect_errno())
{
echo "<h4>Failed to connect to MySQL:
</h4>".mysqli_connect_error();
}

$search = $_REQUEST['food'];
$queryN = mysqli_query($connection, "SELECT *  FROM food WHERE name LIKE '%$search%'");

if($queryN != ""){
	while($row =  mysqli_fetch_array($queryN,MYSQLI_NUM))
	{

		$i = 1;
		$j = 1;
		echo '<b>'.$row[0].'</b><br>';
		echo $row[32]."<br>";
		echo '<input type="button" onclick="return toggleMe(\''.$row[0].'\')" value="View Recipe"><br><div id="'.$row[0].'" style="display:none">';
		while($i < 31){
			if($row[$i] == 0.00  && ($row[$i+1] == 'tsp ' || $row[$i+1] == ''))
				break;
			echo $j. ". " .$row[$i]. " " .$row[$i+1]."<br>";
			$j++;
			$i++;
			$i++;
		}	
		echo "Cooking Instructions: ". $row[31]."<br>";	
		echo '</div><br>';
	}
}
else{
	echo "No recipes found";
	echo '<form action="Add.php" method="POST">
	<input type="submit" name="submit" value="Add Recipe!">
	</form>';
}
echo '<button onclick="goBack()">Go Back</button>';
mysqli_close($connection);
?>
</html>
