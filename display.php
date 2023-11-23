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
$s="select * from stud";
$q=mysqli_query($con,$s);
if(mysqli_num_rows($q))
{
echo "<table border=1><tr>
<th>rollno</th><th>name</th><th>mark</th></tr>";
while($row=mysqli_fetch_assoc($q))
{
echo "<tr>";
echo "<td>".$row["rollno"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["mark"]."</td>";
echo "</tr>";
}
echo "</table>";
}
?>