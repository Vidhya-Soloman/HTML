<html>
<head>
<title>Registration</title>
</head>
<body>
<center>
<form action="" method="POST">
<h3>REGISTRATION</h3>
<table border='1'>
<tr>
<th>NAME</th><td><input type="textbox" name="name"></input>
</td></tr>
<tr>
<th>AGE</th>
<td>
<select name="age">
<option>select</option>
<?php
for($i=18;$i<=50;$i++)
echo "<option>".$i."</option>";
?>
</select>
</td></tr>
<tr>
<th>EMAIL</th>
<td><input type="textbox" name="email"></input>
</td></tr>
<tr>
<th>PHONE NO</th>
<td><input type="textbox" name="phone"></input>
</td></tr>
<tr>
<th>PASSWORD</th>
<td><input type="password" name="pass"></input>
</td></tr>
<tr>
<th>RE-TYPE PASSWORD</th>
<td><input type="password" name="pass1"></input>
<tr>
<td colspan='2' align="center"><input type="submit" name="register" value="register"></input>
<input type="reset" name="reset" value="reset"></input></td></tr>
</table>
</form>
</center>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','sample');
if($con)
{
echo "connected\n";
}
if(isset($_POST['register']))
{
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$pass=$_POST['pass'];
$s="select * from sample1 where email='$email'";
$sq=mysqli_query($con,$s);
if(mysqli_num_rows($sq))
{
echo "***user already exist***";
}
else
{
$q="insert into sample1 values('$name','$age','$email','$phone','$pass')";
$cq=mysqli_query($con,$q);
if($cq)
{
Header("location:login.php");
}
}
}
?>