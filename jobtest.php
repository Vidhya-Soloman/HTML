<?php
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$home=$_POST['home'];
$office=$_POST['office'];
$mal=$_POST['mal'];
$eng=$_POST['eng'];
$hin=$_POST['hin'];
echo "<marquee direction=right><center><h1>WELCOME</h1>".$name."</center></marquee>";
?>
<html>
    <head>
        <title></title>
</head>
<body>
  <center>
    <table border="1" cellpadding="10" bgcolor="skyblue">
        <tr><th>NAME</th>
        <td><?php 
        echo $name;
        ?></td></tr>
          <tr><th>AGE</th>
        <td><?php 
        echo $age;
        ?></td></tr>
        <tr><th>EMAIL</th>
        <td><?php 
        echo $email;
        ?></td></tr>
        <tr><th>LANGUAGE</th>
          <td><?php

          if (isset($mal))
          {
           echo "Malayalam<br>";
          }
          if (isset($eng))
          {
           echo "English<br>";
          }
          if (isset($hin))
          {
           echo "Hindi<br>";
          }
          ?></td></tr>
        <tr>
          <th>HOME</th>
          <td><?php
          echo $home;
          ?></td></tr>
          <tr>
          <th>OFFICE</th>
          <td><?php
          echo $office;
          ?></td></tr>
        </table>
        </center>
</body>
</html>