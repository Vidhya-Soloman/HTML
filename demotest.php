<?php
$name=$_POST['name'];
$age=$_POST['age'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$course=$_POST['course'];
$job=$_POST['job'];
?>
<html>
<head><title>demotest</title>
</head>
<body>
<?php
echo "<h1>WELCOME  ".$name."</h1>";
?>
<table border=1>
<tr>
<th>Name</th>
<?php
echo"<td>".$name."</td>";
?>
</tr>
<tr>
<th>Age</th>
<?php
echo "<td>".$age."</td>";
?>
</tr>
<tr>
<th>Address</th>
<?php
echo "<td>".$address."</td>";
?>
</tr>
<tr>
<th>Phone</th>
<?php
echo "<td>".$phone."</td>";
?>
</tr>
<tr>
<th>Course</th>
<td>
<?php
if (isset($course))
{ 
echo $course;
}
?>
</td>
</tr>
<tr>
<th>Job</th>
<td>
<?php
if (isset($job))
{
echo $job;
}
?>
</td></tr>
</table>
</body></html>











<?php
$name=$_POST['name'];
echo "WELCOME",$name;
echo $name;
$age=$_POST['age'];
echo $age;
$address=$_POST['address'];
echo $address;
$phone=$_POST['phone'];
echo $phone;
$course=$_POST['course'];
if (isset($course))
{
echo $course;
}
$ques=$_POST['job'];
if(isset($ques))
{
echo $ques;
}
?>