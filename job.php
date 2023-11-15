<html>
<head>
<title>Job Application Form
</title>
</head>
<body>
<form action ="jobtest.php" method="post">
<h1>
<font color=red>
<marquee direction="right" onmouseover="this.stop()" onmouseout="this.start()">WELCOME TO FRESHERS WORLD!!!</marquee>
</font>
</h1>
<table border=1 align="center" bgcolor="sky blue">
<tr>
<th colspan="3">Registarion Form</th>
</tr>
<tr>
<td>Name</td>
<td colspan="2">
<input type="textbox" name="name"></input>
</td></tr>
<tr>
<td>Age</td>
<td <colspan="2">
<select name="age">
<option>select</option>
<?php
for($i=18;$i<=30;$i++)
{
echo "<option>".$i."</option>";
}
?>
</select></td></tr>
<tr>
<td>Password</td>
<td colspan="2"><input type="password"></input>
</td></tr>
<tr>
<td>Re-enter Password</td>
<td colspan="2"><input type="password"></input>
</td></tr>
<tr>
<td rowspan="5">
Select your security options
</td>
<tr><td colspan="2">
<input type="radio" name="choice">What is your pet name?</input>
</td></tr>
<tr><td colspan="2">
<input type="radio" name="choice">Who is your best friend?</input>
</td></tr>
<tr><td colspan="2">
<input type="radio" name="choice">What is your favourite color?</input>
</td></tr>
<tr><td colspan="2">
<input type="radio" name="choice">Who is your favourite teacher?</input</td></tr>
<tr>
<td>Answer of security question</td>
<td colspan="2"><input type="textbox"></input>
</td></tr>
<tr>
<td>Email id</td>
<td colspan="2"><input type="textbox" name="email"></input>
</td></tr>
<tr>
<td>Language Known</td>
<td colspan="2"><input type="checkbox" name="mal">Malayalam</input>
<input type="checkbox" name="eng">English</input>
<input type="checkbox" name="hin">Hindi</input>
</td></tr>
<tr>
<td rowspan="2">Phone number</td>
<td align="center">Home</td>
<td align="center">Office</td>
</tr>
<tr>
<td><input type="textbox" name="home"></input>
</td>
<td><input type="textbox" name="office"></input>
</td></tr>
<tr><td>Upload CV</td>
<td colspan="2"><input type="file"></td>
</tr>
<tr>
<td align="center"><input type="reset"></input</td>
<td colspan="2" align="center"><input type="submit"></input>
</td></tr>
</form>
</table>
</body>
</html>