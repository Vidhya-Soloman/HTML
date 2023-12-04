<html>
<head>
<title>STUDENT REGISTRATION</title>
</head>
<body>
<div style="background-color:orange">
<h2>Student Registration</h2></div>
<form method="POST" action="studtest.php">
<table border=1>
<tr>
<th>KTUID</th>
<td><input type="textbox" name="ktuid"></input></td></tr>
<tr>
<th>ROLLNO</th>
<td><input type="textbox" name="rollno"></input></td></tr>
<tr>
<th>NAME</th>
<td><input type="textbox" name="name"></input></td></tr>
<tr>
<th>GENDER</th>
<td>Female<input type="radio" name="gender" value="female"></input>
Male<input type="radio" name="gender" value="male"></input></td></tr>
<tr>
<th>SEMESTER</th>
<td>
<select name="semester">
<option>select</option>
<?php
for($i=1;$i<10;$i++)
echo "<option>Semester".$i."</option>";
?>
</select>
</td></tr>
<tr><th>ADDRESS</th>
<td><textarea name="address"></textarea></td></tr>
<tr><th>PHONE NO</th>
<td><input type="textbox" name="phone"></input></td></tr>
<tr><td colspan=2 align="center">
<input type="submit" name="register" value="Register" style="background-color:lightgreen"></input>
<input type="reset" name="reset" value="Reset" style="background-color:skyblue"></input></td></tr>
</table>
</form>
</html>