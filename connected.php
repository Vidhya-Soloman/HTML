<?php
$con=mysqli_connect('localhost','root','','student');
if($con)
{
echo "connected successfully";
}
else
{
echo "failed to connect";
}
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$mark=$_POST['mark'];
$sq="insert into stud values('$rollno','$name','$mark')";
$p=mysqli_query($con,$sq);
if($p)
{
echo "<script>alert('successfully 1 row inserted');
</script>";
}
?>