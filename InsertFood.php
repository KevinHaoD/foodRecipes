<?php
include "mainpage.php";
$connection = @mysqli_connect (localhost, root, BuffTech, login);
$recQuery = mysqli_query($connection, "select * from food");


while ($row = mysqli_fetch_array($recQuery, MYSQLI_NUM)) {
	$i = l;
	while ($i < 31){
		echo $i.". ". $row[$i], " ".$row[$i+1]."<br>";
		$j++;
		$i++;
		$i++;
	}

}




mysqli_close($connection);

?>
