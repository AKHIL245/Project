<?php
$conx=mysqli_connect('127.0.0.1','root','');
if(!$conx)
{
echo 'not connected';
}
if(!mysqli_select_db($conx,'achievement'))
{
echo 'database not selected';
}
$uname=$_POST['uname'];
$Name=$_POST['name'];
$Roll=$_POST['rollno'];
$Year=$_POST['year'];
$Branch=$_POST['branch'];
$pass=$_POST['pass'];

$sqlx="INSERT INTO student (username,name,password,rollno,year,branch,) VALUES('$uname','$Name','$pass','$Roll','$Year','$Branch')";
if(!mysqli_query($conx,$sqlx))
{
echo 'not inserted';
}
else
{
echo 'inserted';
}
header("refresh:15; url=ii.html");
?>