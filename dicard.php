<?php
$conx=mysqli_connect('127.0.0.1','root','');
if(!$conx)
{
echo 'not connected';
}
if(!mysqli_select_db($conx,'project1'))
{
echo 'database not selected';
}
$Roll=$_POST['rollno'];
$Name=$_POST['studentname'];
$Branch=$_POST['branch'];
$Year=$_POST['year'];
$Sec=$_POST['section'];
$Ename=$_POST['eventname'];
$Oname=$_POST['orgname'];
$Category=$_POST['category'];
$Date=$_POST['date'];
$Status=$_POST['status'];

$sqly = "DELETE FROM students WHERE rollno = '$Roll' and eventname='$Ename'" ;

if(!mysqli_query($conx,$sqly))
	{
	echo mysqli_error($conx);
	}
	else
	{
		echo "successful";
	}

header("refresh:5; url=ret.php");
?>