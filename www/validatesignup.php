<html>
<head>
<script language="JavaScript" type="text/JavaScript" src="checkform.js">
</script>
</head>
    <body bgcolor="#A5D6FF">
    <form action="addcustomer.php" method="post" onsubmit="return validate(this);">
        <br>
        <table border="0" cellspacing="1" cellpadding="3">
        <tr ><td   colspan="2" align="center" style="font-size: 35px">Enter your information</td></tr>
        <tr><td>Email Address: </td><td><input size="30" type="text"
        name="emailaddress" style="color:sky;text-align:center;border: 1px #0000FF solid; border: 1px #0000FF solid;border-radius:5px "><span id="emailmsg" ></span></td></tr>
        <tr><td>Password: </td><td><input size="20" type="password"
        name="password" style="color:sky;text-align:center;border: 1px #0000FF solid ; border: 1px #0000FF solid;border-radius:5px"><span id="passwdmsg"></span></td></tr>
        <tr><td>ReType Password: </td><td><input size="20"
        type="password" name="repassword" style="color:sky;text-align:center;border: 1px #0000FF solid ; border: 1px #0000FF solid;border-radius:5px"><span id="repasswdmsg">
        </span></td></tr>
        <tr><td>Complete Name </td><td><input size="30" type="text"
        name="complete_name" style="color:sky;text-align:center;border: 1px #0000FF solid ; border: 1px #0000FF solid;border-radius:5px"><span id="usrmsg"></span></td></tr>
        <tr><td>Address: </td><td><input size="30" type="text"
        name="address1" style="color:sky;text-align:center;border: 1px #0000FF solid ; border: 1px #0000FF solid;border-radius:5px"></td></tr>
        <tr><td></td><td><input size="30" type="text" name="address2" style="color:sky;text-align:center;border: 1px #0000FF solid ; border: 1px #0000FF solid;border-radius:5px">
        </td></tr>
        <tr><td>City: </td><td><input size="30" type="text"
        name="city" style="color:sky;text-align:center;border: 1px #0000FF solid ; border: 1px #0000FF solid;border-radius:5px"></td></tr>
        <tr><td>State: </td><td><input size="30" type="text"
        name="state" style="color:sky;text-align:center;border: 1px #0000FF solid ; border: 1px #0000FF solid;border-radius:5px"></td></tr>
        <tr><td>Country: </td><td><input size="30" type="text"
        name="country" style="color:sky;text-align:center;border: 1px #0000FF solid ; border: 1px #0000FF solid;border-radius:5px"></td></tr>
        <tr><td>Zip Code: </td><td><input size="20" type="text"
        name="zipcode" style="color:sky;text-align:center;border: 1px #0000FF solid ; border: 1px #0000FF solid;border-radius:5px"></td></tr>
        <tr><td>Phone No: </td><td><input size="30" type="text"
        name="phone_no" style="color:sky;text-align:center;border: 1px #0000FF solid ; border: 1px #0000FF solid;border-radius:5px"></td></tr>
        <tr><td><input type="submit" name="submit" value="Submit" style="border: 1px #0000FF solid;border-radius:5px">
        </td><td>
        <input type="reset" value="Cancel" style="border: 1px #0000FF solid;border-radius:5px"></td></tr>
        </table>
        
    </form>
    </body>
</html>