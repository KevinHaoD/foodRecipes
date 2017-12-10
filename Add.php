<?php
//Add
$connection = @mysqli_connect (localhost, root, random02, login);
echo "Hey";
if(mysqli_connect_errno())
{
	mysqli_connect_error();
}
?>

<html>
<head>
<title>testmain</title>
</head>
<style>
h1{
background-color: #D4AF37
}
body{
margin: 0px
}
</style>
<h1 align="left"><img src="https://imgur.com/fTXyiDr.png" style=width:55px;height:40px>Recipe Wiki</h1>
<body id="body-color">
<div id="Add recipe" align="center">
<fieldset style="width:90%" align="center"><legend>Add Recipe</legend>
<table border="0"> <tr> <form method="POST" enctype="multipart/form-data" action="AddHandler.php">


 
 
<tr>
<td>name of recipe </td><td> <input style = "width:300px" type="text" name="name"></td>
</tr>

	<tr>
<td>ammount1</td><td> <input style="height:20px; width:40px" type="text" name= "ammt1" ></td>
<td>
<p>
unit
<select name="unit1">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient1</td><td> <input style = "width:300px" type="text" name="ingredient1"></td>
</tr>

<tr>
<td>ammount2</td><td> <input style="height:20px; width:40px" type="text" name= "ammt2" ></td>
<td>
<p>
unit
<select name="unit2">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>


</select>
</p>

</td>
</tr>
<tr>
<td>ingredient2 </td><td> <input style = "width:300px" type="text" name="ingredient2"></td>
</tr>

<tr>
<td>ammount3</td><td> <input style="height:20px; width:40px" type="text" name= "ammt3" ></td>
<td>
<p>
unit
<select name="unit3">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient3</td><td> <input style = "width:300px" type="text" name="ingredient3"></td>
</tr>


<tr>
<td>ammount4</td><td> <input style="height:20px; width:40px" type="text" name= "ammt4" ></td>
<td>
<p>
unit
<select name="unit4">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient4</td><td> <input style = "width:300px" type="text" name="ingredient4"></td>
</tr>



<tr>
<td>ammount5</td><td> <input style="height:20px; width:40px" type="text" name= "ammt5" ></td>
<td>
<p>
unit
<select name="unit5">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient5</td><td> <input style = "width:300px" type="text" name="ingredient5"></td>
</tr>

<tr>
<td>ammount6</td><td> <input style="height:20px; width:40px" type="text" name= "ammt6" ></td>
<td>
<p>
unit
<select name="unit6">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient6 </td><td> <input style = "width:300px" type="text" name="ingredient6"></td>
</tr>

<tr>
<td>ammount7</td><td> <input style="height:20px; width:40px" type="text" name= "ammt7" ></td>
<td>
<p>
unit
<select name="unit7">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient7</td><td> <input style = "width:300px" type="text" name="ingredient7"></td>
</tr>

<tr>
<td>ammount8</td><td> <input style="height:20px; width:40px" type="text" name= "ammt8" ></td>
<td>
<p>
unit
<select name="unit8">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient8 </td><td> <input style = "width:300px" type="text" name="ingredient8"></td>
</tr>


<tr>
<td>ammount9</td><td> <input style="height:20px; width:40px" type="text" name= "ammt9" ></td>
<td>
<p>
unit
<select name="unit9">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient9</td><td> <input style = "width:300px" type="text" name="ingredient9"></td>
</tr>

<tr>
<td>ammount10</td><td> <input style="height:20px; width:40px" type="text" name= "ammt10" ></td>
<td>
<p>
unit
<select name="unit10">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient10 </td><td> <input style = "width:300px" type="text" name="ingredient10"></td>
</tr>

<tr>
<td>ammount11</td><td> <input style="height:20px; width:40px" type="text" name= "ammt11" ></td>
<td>
<p>
unit
<select name="unit11">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient11</td><td> <input style = "width:300px" type="text" name="ingredient11"></td>
</tr>

<tr>
<td>ammount12</td><td> <input style="height:20px; width:40px" type="text" name= "ammt12" ></td>
<td>
<p>
unit
<select name="unit12">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient12 </td><td> <input style = "width:300px" type="text" name="ingredient12"></td>
</tr>


<tr>
<td>ammount13</td><td> <input style="height:20px; width:40px" type="text" name= "ammt13" ></td>
<td>
<p>
unit
<select name="unit13">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient13</td><td> <input style = "width:300px" type="text" name="ingredient13"></td>
</tr>

<tr>
<td>ammount14</td><td> <input style="height:20px; width:40px" type="text" name= "ammt14" ></td>
<td>
<p>
unit
<select name="unit14">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient14 </td><td> <input style = "width:300px" type="text" name="ingredient14"></td>
</tr>

<tr>
<td>ammount15</td><td> <input style="height:20px; width:40px" type="text" name= "ammt15" ></td>
<td>
<p>
unit
<select name="unit15">

  <option value="tsp">tsp</option>
  <option value="tbsp">tbsp</option>
  <option value="cup">cup</option>
  <option value="oz">oz</option>
  <option value="lb">lb</option>
  <option value="qt">qt</option>
  <option value="pt">pt</option>
  <option value="qt">qt</option>
  <option value="l">l</option>
  <option value="ml">ml</option>
  <option value="g">g</option>
  <option value="kg">kg</option>

</select>
</p>

</td>
</tr>
<tr>
<td>ingredient15</td><td> <input style = "width:300px" type="text" name="ingredient15"></td>
</tr>





<tr>
<td>preparation </td><td> <input style = "width:500px" type="text" name="prep"></td>
</tr>



<tr>
<td>description </td><td> <input style = "width:500px" type="text" name="desc"></td>
</tr>




<td><input id="button" type="submit" name="submit" value="Add Recipe"></td>

</form>
</table>
</fieldset>
</div>
</body>
</html>
                                                              1,1           Top

