<?php
$con=mysqli_connect('localhost','root','','registration');
if($con)
{
echo"connected";
}
if(isset($_POST['register']))
{
$ktuid=$_POST['ktuid'];
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$semester=$_POST['semester'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$q="insert into reg values('$ktuid','$rollno','$name','$gender','$semester','$address','$phone')";
$cq=mysqli_query($con,$q);
if($cq)
{
echo "1 row inserted";
echo "student registered successfully";
}
}
?>
