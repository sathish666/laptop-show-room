<?php
$c=mysqli_connect("localhost","root");
if($c)
{
if(mysqli_select_db($c,"pro"))
{
$pname=$_POST['username'];
$age=$_POST['password'];
$gen=$_POST['email'];
$m=$_POST['mob'];
mysqli_query($c,"insert into signin values('$pname','$age')");
if(mysqli_query($c,"insert into signup values('$pname','$age','$gen',$m)"))
{
if(print "<script language='JavaScript'>alert('feedback inserted');</script>")
{
header("Location: signin.php");
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
