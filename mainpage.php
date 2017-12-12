<?php
	//mainpage.php
	include "menuBar.php";
?>
<html>
<body>
<form action="search.php" method="POST">
<h3>Search your favorite recipes!</h3>
<tr>
<td>Search:</td> <td> <input type="text" name="food"><br></td>
</tr>
<input type="submit" name="submit" value="Search!">
</form>
<form action="InsertFood.php" method="POST">
<h3>Or add your own!</h3>
<input type="submit" name="submit" value="Add Recipe!">
</form>
</body>
</html>

<html>
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
	$connection = @mysqli_connect (localhost, root, Jc2011368, login);
	$recipeQuery = mysqli_query($connection, "SELECT * FROM food ORDER BY RAND() LIMIT 5");
	/*
	function favoriter($fav){
		$query = "INSERT INTO favorites(login, food) VALUES('$email', '$fav')";
		$result = mysqli_query($connection, $query);
		if($result){
			echo "Successful";
		}	
	}
	*/
	while ($row = mysqli_fetch_array($recipeQuery, MYSQLI_NUM)){ 
		$i = 1;
		$j = 1;
		echo '<b>'.$row[0].'</b><br>';
		echo $row[32]."<br>";
		echo '<input type="button" onclick="return toggleMe(\''.$row[0].'\')" value="View Recipe"><br><div id="'.$row[0].'" style="display:none">';
		//echo '<input type="button" onclick='$favQuery = "INSERT INTO favorites(login, food) VALUES([$_REQUEST['email']], [.$row[0].])"' value="Favorite"><br><div id="'.$row[0].'">';
		//echo '<form action="" method="post">';
		//echo '<input type="button" name='.$row[0].'/>';
		//echo '</form>';
		/*
		if(isset($_POST[$row[0]])
			favoriter(.$row[0].);
		*/
		while($i < 31){
			echo $j. ". " .$row[$i]. " " .$row[$i+1]."<br>";
			$j++;
			$i++;
			$i++;
		}	
		echo "Cooking Instructions: ". $row[31]."<br>";	
		echo '</div><br>';
	}

?>
</html>
