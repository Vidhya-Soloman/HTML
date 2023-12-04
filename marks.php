<html>
<head>
<title>mark entry</title>
</head>
<body>
<div style="background-color:orange">
<h2>Mark Entry</h2></div>
<form method="POST" action="marktest.php">
<table border=1>
<tr><th>STUDID</th>
<td><input type="textbox" name="studid"></input></td></tr>
<tr><th>KTUID</th>
<td><select name="ktuid"><option>select</option>
<?php
for($i=1;$i<70;$i++)
echo "<option>TVE20".$i."</option>";
?>
</select>
</td></tr>
<tr>
<th>SUBJECT</th>
<td><input type="textbox" name="subject"></input></td></tr>
<tr><th>SERIES</th>
<td><input type="textbox" name="series"></input></td></tr>
<tr><th>ASSIGNMENT</th>
<td><input type="textbox" name="assignment"></input></td></tr>
<tr>
<td colspan=2 align="center"><input type="submit" name="submit" value="submit" style="background-color:lightgreen"></input></td></tr>
</table>
</form>
</body>
</html>
