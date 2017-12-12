<?php
//yourRecipes.php
session_start();
include "menuBar.php";
$connection = @mysqli_connect (localhost, root, Jc2011368, login);

if(isset($_SESSION['email'])){
	$email = $_SESSION['email'];
	//echo $email;
	//print_r($_SESSION);
}
else
	echo "Cannot validate user";

$recipeQuery = mysqli_query($connection, "SELECT * FROM yourRecipes WHERE email = '$email'");

$row = mysqli_fetch_array($recipeQuery, MYSQLI_NUM);
if(isset($row["food"])){
	while ($row = mysqli_fetch_array($recipeQuery["food"], MYSQLI_NUM)){ 
		$i = 1;
		$j = 1;
		echo "Name: ". $row[0]."<br>";
		while($i < 31){
			echo $j. ". " .$row[$i]. " " .$row[$i+1]."<br>";
			$j++;
			$i++;
			$i++;
		}
		echo "Prep: ". $row[31]."<br>";
		echo "Description: ". $row[32]."<br>";

	}
}
else{
	echo "No recipes created";
	echo '<form action="InsertFood.php" method="POST">
	<input type="submit" name="submit" value="Add Recipe!">
	</form>';
}
?>
