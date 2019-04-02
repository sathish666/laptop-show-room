<?php
session_start();
if(isset($_POST['submit']))
{
$c=mysqli_connect("localhost","root") or die(mysqli_error());
if($c)
{
if(mysqli_select_db($c,"pro"))
{
$pname=$_SESSION['username'];
if(mysqli_query($c,"insert into booknow(username) values('$pname')"))
{
header("Location: index.php");
}
else
print "record not added<br>".mysqli_error($c);
}
else
print "db not selected<br>";
mysqli_close($c);
}
else
print "not connected<br>";
}