<?php
$con=mysqli_connect('localhost','root','','registration');
if($con)
{
echo "connected";
}
$studid=$_POST['studid'];
$ktuid=$_POST['ktuid'];
$subject=$_POST['subject'];
$series=$_POST['series'];
$assignment=$_POST['assignment'];
if(isset($_POST['submit']))
{
$q="select * from reg where ktuid='$ktuid'";
$qc=mysqli_query($con,$q);
if(mysqli_num_rows($qc))
{
$s="insert into marks values('$studid','$ktuid','$subject','$series','$assignment')";
$cs=mysqli_query($con,$s);
echo "1 row inserted";
}
else
{
echo "**student haven't registered**";
} 
}
?>