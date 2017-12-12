<!--mainPage.php-->
<!DOCTYPE html>
<html>
<title>
Recipe Wiki
</title>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #D4AF37;
}

il {

    float: right;
}

il a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

il a:hover, .dropdown:hover .dropbtn {
    background-color: #ffd700;
}

il.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fffff4;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #D4AF37}

.dropdown:hover .dropdown-content {
    display: block;
}

li {

    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #ffd700;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fffff4;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #D4AF37}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</head>
<body>
<ul>
  <li><a href="#home">RecipeWiki</a></li>
  <li><a href="#about">About</a></li>
  <il class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">My Account/Add Recipe</a>
    <div class="dropdown-content">
      <a href="Add.php">Add Recipe</a>
      <a href="yourRecipes.php">Your Recipes</a>
      <a href="Project.php">Logout</a>
    </div>
  </il>
</ul>
<form action="search.php" method="POST" align = "center">
      <h3>Search your favorite recipes!</h3>


<tr>
	<td>Search:</td> <td> <input type="text" name="food"><br></td>
</tr>
      <input type="submit" name="submit" value="Search!">
    </form>
<form action="addr.php" method="POST" align = "center">
      <h3>Or add your own!</h3>

      <input type="submit" name="submit" value="Add Recipe!">
    </form>
</body>
</html>
