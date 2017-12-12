<?php
//yourRecipes.php
session_start();
include "menuBar.php";
?>

<html>
<div2 style="margin:30px;float:left">
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

<script
src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js">
</script> 

<script>
$(document).ready(function(){
$('.button').click(function(){
var clickBtnName = $(this).attr('name');
var ajaxurl = 'http://localhost/BuffTech/deleteHandler.php';
var data = {'id': clickBtnName};
$.post(ajaxurl, data, function(response) {
window.location.href="http://localhost/BuffTech/yourRecipes.php";
});
});
});
</script>

<?php
$connection = @mysqli_connect (localhost, root, BuffTech, login);

if(isset($_SESSION['email']))
	$email = $_SESSION['email'];

else{
	echo "User authentification failed ";
	echo "<a href='Project.php'>Back to sign in</a>";
}

$recipeQuery = mysqli_query($connection, "SELECT * FROM yourRecipes WHERE login = '$email'");

if(mysqli_num_rows($recipeQuery)>0){
	while ($row = mysqli_fetch_array($recipeQuery, MYSQLI_NUM)){ 
		$value = $row[1];
		$query = mysqli_query($connection, "SELECT * FROM food WHERE name = '$value'");
		while ($rowR = mysqli_fetch_array($query, MYSQLI_NUM)){
			$i = 1;
			$j = 1;
			echo '<b>'.$rowR[0].'</b><br>';
			echo $rowR[32]."<br>";
			//echo '<form method="POST" enctype="multipart/form-data" action="deleteHandler.php">';
			//echo '<input type="submit" name="delete" value="Delete" style="display:inline-block;float:right"></form>';	
			echo '<input type="submit" class="button" name="'.$rowR[0].'" value="Delete" style="display:inline-block;float:right"/>'; 
			echo '<input type="button" onclick="return toggleMe(\''.$rowR[0].'\')" value="View Recipe"><br><div id="'.$rowR[0].'" style="display:none">';
			while($i < 31){
				if($rowR[$i] == 0.00  && $rowR[$i+1] == 'tsp ')
					break;
				echo $j. ". " .$rowR[$i]. " " .$rowR[$i+1]."<br>";
				$j++;
				$i++;
				$i++;
			}	
			echo "Cooking Instructions: ". $rowR[31]."<br>";
			echo "Description: " .$rowR[32]. "<br>";
			echo '</div><br>';
		}
	}
}
else{
	echo "No recipes created";
	echo '<form action="Add.php" method="POST">
	<input type="submit" name="submit" value="Add Recipe!">
	</form>';
}
?>
<div2>
</body>
</html>
