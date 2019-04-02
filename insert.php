<?php
$c=mysqli_connect("localhost","root");
if($c)
{
if(mysqli_select_db($c,"pro"))
{
$pname=$_POST['name'];
$age=$_POST['email'];
$gen=$_POST['message'];
if(mysqli_query($c,"insert into feedback values('$pname','$age','$gen')"))
{
if(print "<script language='JavaScript'>alert('feedback inserted');</script>")
{
header("Location: index.php");
}
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
?>
