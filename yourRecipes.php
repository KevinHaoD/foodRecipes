//yourRecipes.php
<?php
include "mainpage.php";
$connection = @mysqli_connect (localhost, root, Jc2011368, login);
$recipeQuery = mysqli_query($connection, "SELECT * FROM food");
while ($row = mysqli_fetch_array($recipeQuery, MYSQLI_NUM)){ 
	$i = 1;
	$j = 1;
	echo "Name: ". $row[0]."<br>";
	while($i < 31){
		echo $j. ". " .$row[$i]. " " .$row[$i+1]."<br>";
		$j++;
		$i++;
		$i++;
	}
}
?>
<!DOCTYPE html>
<html>
<body>

</body>
</html>

