<?php
//Add
include "menuBar.php";
$connection = @mysqli_connect (localhost, root, Jc2011368, login);
if(mysqli_connect_errno())
{
	mysqli_connect_error();
}
?>
<html>
<head>
<title>Add Recipe</title>
</head>

<body id="body-color">
<div id="Add recipe" align="center">
<fieldset style="width:90%" align="center"><legend>Add Recipe</legend>
<table border="0"> <tr> <form method="POST" enctype="multipart/form-data" action="AddHandler.php">


 
 
<tr>
<td>Name of recipe </td><td> <input style = "width:300px" type="text" name="name"></td>
</tr>

	<tr>

<tr>
<td>Ingredient1</td><td> <input style = "width:300px" type="text" name="ingredient1"></td>
</tr>

<tr>
<td>Amount1</td><td> <input style="height:20px; width:40px" type="text" name= "ammt1" ></td>
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
<td>Ingredient2 </td><td> <input style = "width:300px" type="text" name="ingredient2"></td>
</tr>

<tr>
<td>Amount2</td><td> <input style="height:20px; width:40px" type="text" name= "ammt2" ></td>
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
<td>Ingredient3</td><td> <input style = "width:300px" type="text" name="ingredient3"></td>
</tr>


<tr>
<td>Amount3</td><td> <input style="height:20px; width:40px" type="text" name= "ammt3" ></td>
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
<td>Ingredient4</td><td> <input style = "width:300px" type="text" name="ingredient4"></td>
</tr>



<tr>
<td>Amount4</td><td> <input style="height:20px; width:40px" type="text" name= "ammt4" ></td>
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
<td>Ingredient5</td><td> <input style = "width:300px" type="text" name="ingredient5"></td>
</tr>

<tr>
<td>Amount5</td><td> <input style="height:20px; width:40px" type="text" name= "ammt5" ></td>
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
<td>Ingredient6 </td><td> <input style = "width:300px" type="text" name="ingredient6"></td>
</tr>

<tr>
<td>Amount6</td><td> <input style="height:20px; width:40px" type="text" name= "ammt6" ></td>
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
<td>Ingredient7</td><td> <input style = "width:300px" type="text" name="ingredient7"></td>
</tr>

<tr>
<td>Amount7</td><td> <input style="height:20px; width:40px" type="text" name= "ammt7" ></td>
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
<td>Ingredient8 </td><td> <input style = "width:300px" type="text" name="ingredient8"></td>
</tr>


<tr>
<td>Amount8</td><td> <input style="height:20px; width:40px" type="text" name= "ammt8" ></td>
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
<td>Ingredient9</td><td> <input style = "width:300px" type="text" name="ingredient9"></td>
</tr>

<tr>
<td>Amount9</td><td> <input style="height:20px; width:40px" type="text" name= "ammt9" ></td>
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
<td>Ingredient10 </td><td> <input style = "width:300px" type="text" name="ingredient10"></td>
</tr>

<tr>
<td>Amount10</td><td> <input style="height:20px; width:40px" type="text" name= "ammt10" ></td>
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
<td>Ingredient11</td><td> <input style = "width:300px" type="text" name="ingredient11"></td>
</tr>

<tr>
<td>Amount11</td><td> <input style="height:20px; width:40px" type="text" name= "ammt11" ></td>
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
<td>Ingredient12 </td><td> <input style = "width:300px" type="text" name="ingredient12"></td>
</tr>


<tr>
<td>Amount12</td><td> <input style="height:20px; width:40px" type="text" name= "ammt12" ></td>
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
<td>Ingredient13</td><td> <input style = "width:300px" type="text" name="ingredient13"></td>
</tr>

<tr>
<td>Amount13</td><td> <input style="height:20px; width:40px" type="text" name= "ammt13" ></td>
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
<td>Ingredient14 </td><td> <input style = "width:300px" type="text" name="ingredient14"></td>
</tr>

<tr>
<td>Amount14</td><td> <input style="height:20px; width:40px" type="text" name= "ammt14" ></td>
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
<td>Ingredient15</td><td> <input style = "width:300px" type="text" name="ingredient15"></td>
</tr>

<td>Amount15</td><td> <input style="height:20px; width:40px" type="text" name= "ammt15" ></td>
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
<td>Preparation </td><td> <input style = "width:500px" type="text" name="prep"></td>
</tr>



<tr>
<td>Description </td><td> <input style = "width:500px" type="text" name="desc"></td>
</tr>




<td><input id="button" type="submit" name="submit" value="Add Recipe"></td>

</form>
</table>
</fieldset>
</div>
</body>
</html>

