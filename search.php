<?php
//include "mainpage.php";
$connection = @mysqli_connect (localhost, root, danraf12, FoodData);
if(mysqli_connect_errno())
{
echo "<h4>Failed to connect to MySQL:
</h4>".mysqli_connect_error();
}

$search = $_REQUEST['food'];
$queryN = mysqli_query($connection, "SELECT *  FROM food WHERE name LIKE '%$search%'");

while($row =  mysqli_fetch_array($queryN,MYSQLI_NUM))
{
echo "<tr>";
echo "<td>Name:</td><td> <form action = page.php> <input type=submit name=submit  value='$row[0]'></form></td>";
//echo "Name: <a href=page.php>".$row[0]."</a><br>";
//echo "Name: ".$row[0]."<br>";
echo "Prep: ". $row[32]."<br>";
echo "</tr>";
}
mysqli_close($connection);
?>
