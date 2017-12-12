<?php	
include "menuBar.php";
$ms = $_REQUEST['m'];
$d = $_REQUEST['submit'];
$connection = @mysqli_connect(localhost, root, Jc2011368, login);
if(mysqli_connect_errno())
{
echo "<h4>Failed to connect to MySQL:
</h4>".mysqli_connect_error();
}
echo '<div2 style="margin:30px;float:left">';
$r = 1.0;

if($ms != NULL)
{
    	$r = $r * $ms;
}

$result = mysqli_query($connection, "SELECT * FROM food WHERE name = '".$d."'");
$row = mysqli_fetch_array($result);
    	$i = 1;
    	$j = 1;
echo "<b> ".$row[0]."</b><br>";
while($i < 31){
	if($row[$i] == 0.00  && ($row[$i+1] == 'tsp ' || $row[$i+1] == ''))
		break;
    	$mult = $r * $row[$i];
        echo $j. ". " .$mult. " " .$row[$i+1]."<br>";
    	$j++;
    	$i++;
	$i++;
}
echo "Cooking Instructions: ". $row[31]."<br>";	
echo "Description: ". $row[32]."<br>";

echo "<html><body><form action=page.php method=GET><h3>Modify the recipe for your serving size!</h3><input type=text name = m><input type=submit name=submit value='$row[0]'></form></body></html>";
echo '</div2>';
?>
