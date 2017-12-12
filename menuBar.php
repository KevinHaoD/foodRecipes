<?php
//menuBar.php
?>
<html>
<title>
Recipe Wiki
</title>
<link rel="icon" href="https://i.imgur.com/lmQgOFd.png"/>
<head>
<style>
body{
margin: 0px;
}

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
<ul>
<img src="https://i.imgur.com/n0iWZ1d.jpg" style="width:33%;height:65px;float:right;top:0px">
<img src="https://i.imgur.com/n0iWZ1d.jpg" style="width:33%;height:65px;float:left;top:0px">
<img src="https://i.imgur.com/n0iWZ1d.jpg" style="width:34%;height:65px;float:right;top:0px">
  <li><a href="mainpage.php"><b>RecipeWiki</b></a></li>
  <li><img src="https://i.imgur.com/lmQgOFd.png" style=width:65px;height:40px></li>
  <il class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><b>Your Account</b></a>
    <div class="dropdown-content">
      <a href="yourRecipes.php">Your Recipes</a>
      <a href="Project.php">Logout</a>
    </div>
  </il>
</ul>
</html>
