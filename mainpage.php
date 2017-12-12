<?php
	//mainpage.php
	include "menuBar.php";
?>
<html>
<style>
nav{
	margin: 10px;
	float: right;
	padding: 20px;

	border: 2px solid black;
}
</style>
<div2 style="margin:30px;float:left">
<nav>
<form action="search.php" method="POST">
<h3>Search your favorite recipes!</h3>
<tr>
<td>Search:</td> <td> <input type="text" name="food"><br><br></td>
</tr>
<input type="submit" name="submit" value="Search!">
</form><br>
<form action="Add.php" method="POST">
<h3>Or add your own!</h3>
<input type="submit" name="submit" value="Add Recipe!">
</form>
</nav>
</html>

<html>
<body>
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
<?php
	echo '<h1>Recipes from other people:</h1>';
	$connection = @mysqli_connect (localhost, root, BuffTech, login);
	$recipeQuery = mysqli_query($connection, "SELECT * FROM food ORDER BY RAND() LIMIT 5");
	while ($row = mysqli_fetch_array($recipeQuery, MYSQLI_NUM)){ 
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

?>
<INPUT TYPE="button" onClick="history.go(0)" VALUE="Randomize" style="float:right">
<div2>
</body>
</html>
