
<html>
<head>
<title>Registration</title>
</head>
<body>
<form method="POST" action="regtest.php">
Name<input type="textbox"name="username" ></input><br><br>
Age<select name="age">
<option>select</option>
<?php
for($i=18;$i<=50;$i++)
 echo "<option>".$i."</option>";
?>
</select><br><br>
Email<input type="textbox" name="email"></input><br><br>
Phone no<input type="textbox" name="phone"></input><br><br>
Password<input type="password" name="pass1"></input><br><br>
Retype Password<input type="password" name="pass2"></input>
<br><br><input type="submit" name="register" value="Register"></input>
<input type="button" name="reset" value="Reset"></input>
</form>
</body>
</html>
<?php
$con=mysqli_connect('localhost','root','','registration');
if($con)
{
//echo"successfull";
}
if(isset($_POST['register']))
{
$name=$_POST['username'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['pass1'];
$qc="select * from register where email='$email'";
$c=mysqli_query($con,$qc);
if(mysqli_num_rows($c))
{
echo"user already exist";
}
else
{
$sq="insert into register values('$name','$age','$email','$phone','$password')";
$q=mysqli_query($con,$sq);
if($q)
{
echo "1 row inserted successfully";
}
}
}
?>