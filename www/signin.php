
<?php
include('topmenu.php');
?>
<html>
<head>
</head>
<form action="validateuser.php" method="post">
<center>
<table border="0" cellspacing="1" cellpadding="3">
<br><br>
<tr><td style="font-size: 20px ;color:black">Email Aaddress:</td><td><input size="20" type="text" name="emailaddress" style="color:black;text-align:center;border: 1px #0000FF solid;border-radius:5px  ">
</td></tr>
<tr><td style="font-size: 20px;color:black">Password:</td><td><input type="password" name="password"style="color:black;text-align:center;border: 1px #0000FF solid;border-radius:5px"></td></tr>
<tr><td colspan=3 align="center"><input  type="submit" name="submit" value="Login"style="color:sky;text-align:center;border: 1px #0000FF solid ;border-radius:5px;height:25px;width:50px" 
></td></tr>
</table>
</center>
</form>
</body>
</html>