
<?php
//include "mainpage.php";
$connection = @mysqli_connect (localhost, root, 'Dht19960313!', login);
if(mysqli_connect_errno())
{
echo "<h4>Failed to connect to MySQL:
</h4>".mysqli_connect_error();
}

$search = $_REQUEST['food'];
$queryN = mysqli_query($connection, "SELECT *  FROM food WHERE name = '$search'");

while($row =  mysqli_fetch_array($queryN,MYSQLI_NUM))
{ 	$i =1;
	$j =1;
	echo "Name: ".$row[0]."<br>";
	while($i <31)
	{
		echo $j.". ".$row[$i]." ".$row[$i+1]."<br>";
		$j++;
		$i++;
		$i++;
	}
	echo "Prep: ". $row[32]."<br>";
	echo "Description: ". $row[33]."<br>";
}
mysqli_close($connection);
?>
