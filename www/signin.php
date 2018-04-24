
<?php
include('topmenu.php');
?>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<center>
<br><br><br>
<body class="text-center">
<form action="validateuser.php" method="post">
<img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="35" height="35">

      <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
      <div class="checkbox mb-3">
      <table border="0" cellspacing="1" cellpadding="3">
      <label>
      <tr> <td style="font-size: 20px ;color:black">Email Aaddress:</td><td><input type="Email" name="emailaddress" placeholder="Email address" required style="text-align:center;border: 1px #0000FF solid;border-radius:3px  "> </td> </tr>
      
      <br>
   
    <tr><td style="font-size: 20px;color:black">Password :</td><td><input type="password" name="password" placeholder="Password" required style="text-align:center;border: 1px #0000FF solid;border-radius:5px"></td></tr>
    <tr><td colspan=3 align="center"><input  type="submit" name="submit" value="Login"style="color:sky;text-align:center;border: 1px #0000FF solid ;border-radius:3px;height:20px;width:48px" 
    
</td></tr>
</table>
</center>
</form>
</body>
</html>