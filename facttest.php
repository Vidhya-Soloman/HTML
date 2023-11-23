<?php

$n=$_POST['factorial'];
$fact=1;
$i=1;
while($i<=$n)
{ 
 $fact=$fact*$i;
 $i++;
}
echo "factorial is:$fact";
?>

