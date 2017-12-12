<?php
$connection = @mysqli_connect (localhost, root, Jc2011368, lab6);
if(mysqli_connect_errno())
{
mysqli_connect_error();
}

$name = $_REQUEST('name');
$query = "select * from food where name == $name;";
$recipeQuery = mysqli_query($connection,$query);
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
	echo "Prep: ". $row[31]."<br>";
	echo "Description: ". $row[32]."<br>";
}
?>