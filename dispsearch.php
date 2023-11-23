<?php
$con=mysqli_connect('localhost','root','','student');
if($con)
{
echo "connected successfully<br>";
}
else
{
echo "failed to connect";
}
$n=$_POST['name'];
$s="select * from stud where name='$n'";
$q=mysqli_query($con,$s);
if(mysqli_num_rows($q))
{
echo "<table border=1><tr>
<th>rollno</th><th>name</th><th>mark</th></tr>";
$row=mysqli_fetch_assoc($q);
echo "<tr>";
echo "<td>".$row["rollno"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["mark"]."</td>";
echo "</tr>";
echo "</table>";
}
else
{
echo "no search";
}
?>