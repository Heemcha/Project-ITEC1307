<!DOCTYPE html>
<head>
<html lang="en">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shop Online</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->




<title>Big Online Market</title>
<link rel="stylesheet" href="css/style.css">
<script language="JavaScript" type="text/JavaScript">
function makeRequestObject(){
var xmlhttp=false;
try {
xmlhttp = new ActiveXObject('Msxml2.XMLHTTP'); // #1
} catch (e) {
try {
xmlhttp = new
ActiveXObject('Microsoft.XMLHTTP'); // #2
} catch (E) {
xmlhttp = false;
}
}
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
xmlhttp = new XMLHttpRequest(); // #3
}
return xmlhttp;
}
function updateCart(){ // #4
var xmlhttp=makeRequestObject();
xmlhttp.open('GET', 'countcart.php', true); // #5
xmlhttp.onreadystatechange = function(){ // #6
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { // #7
var ajaxCart = document.getElementById("cartcountinfo"); // #8
ajaxCart.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
</script>
</head>
<style>
    body {
        background-color: #CBFF88;
    }
 </style>
<body>
<table width="100%" cellspacing="0" cellpadding="4">
<col style="width:30%">
<col style="width:40%">
<col style="width:20%">
<tr><td style="background-color:#E8AB8B;color:Red;"></td><td style="background-color:#E8AB8B;color:Red;"></td><td style="background-color:#E8AB8B;color:Red;">
<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
if (isset($_SESSION['emailaddress']))
{
echo "Welcome " . $_SESSION['emailaddress'] . "&nbsp;&nbsp;&nbsp;" ; // #9
echo "<a href=\"logout.php\">Log Out</a></td></tr>";
}
else
{
echo "<a href=\"signin.php\" style =\"color:red\">LOGIN</a>&nbsp;&nbsp;&nbsp;";
echo "<a href=\"validatesignup.php\" style =\"color:red\">SINGUP</a></td></tr>";
}
?>
<tr><td style="font-size: 35px;color:#ffff00;background-color:	#DB7093;">
<b> Big Online Market </b></font></td>
<td bgcolor="#DB7093">
<form method="post" action="searchitems.php">
<input size="50"   type="text" name="tosearch" style="height:25px">
<input type="submit" name="submit" value="Search" style="height:40px ;background:#A3F7FF; border: 3px black solid;font-size:20px" >
</form></td>
<td bgcolor="#DB7093" ><a href="cart.php"><img style="max-width:40px;max-height:40px;width:auto;height:auto;" src="images/Cart2.png"></img>
<span id="cartcountinfo" style="color:yellow"></span></a>
</td></tr>
</table>
<div class="container">
<nav>
<ul class="nav">
<li><a href="index.php">Home</a></li>
<li class="dropdown">
<a href="index.php">Electronics</a>
<ul>
<li><a href="itemlist.php?category=CellPhone">Smart Phones</a></li>
<li><a href="itemlist.php?category=Laptop">Laptops</a></li>
<li><a href="itemlist.php?category=Cameras">Cameras </a></li>
<li><a href="itemlist.php?category=Televisions">Televisions</a></li>
</ul>
</li>
<li class="dropdown">
<a href="index.php">Home & Furniture</a>
<ul class="large">
<li><a href="index.php">Kitchen Essentials</a></li>
<li><a href="index.php">Bath Essentials</a></li>
<li><a href="index.php">Furniture</a></li>
<li><a href="index.php">Dining & Serving</a></li>
<li><a href="index.php">Cookware</a></li>
</ul>
</li>
<li><a href="index.php">Books</a></li>
</ul>
</nav>
</div>
<p>