<html>
<head>
<title>demo</title>
</head>
<body>
<center>
<h1>WELCOME</h1>
<form method="post" action="demotest.php">
<table border=1>
<tr>
<th>NAME</th>
<td><input type="text" name="name"></input>
</td>
<tr>
<th>Age</th>
<td><select name="age">
<option>select</option>
<?php
for($i=18;$i<=30;$i++)
{
echo "<option>".$i."</option>";
}
?></select></td>
</tr>
<tr>
<th>Address</th>
<td><textarea name="address"></textarea>
</td></tr>
<tr>
<th>Phone</th>
<td><input type="text" name="phone"></input><br><br>
</td></tr>
<tr>
<th>COURSE</th>
<td>MCA:<input type="checkbox" name="course" value="MCA">
BCA:<input type="checkbox" name="course" value="BCA"></td></tr>
<tr>
<th>Job</th>
<td>
Yes<input type="radio" name="job" value="yes"></input><br>
No<input type="radio" name="job" value="no"></input></td></tr>
<tr>
<td colspan=2>
<input type="submit" name="submit" value="submit"></input>
<input type="reset" name="reset" value="reset"></input>
</td></tr>
</center>
</form>
</body>
</html>