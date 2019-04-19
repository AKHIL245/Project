<?php

// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];

// Connect to the database
$con = mysqli_connect("localhost","root","");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysqli_error());
}

// Select the database to use
mysqli_select_db($con,'project1');

$result = mysqli_query($con,"SELECT users_email, users_pass FROM users WHERE users_email = '$email'");

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if($row["users_email"]==$email && $row["users_pass"]==$pass)
   echo '<meta http-equiv="refresh" content="1; URL=index.php" />';
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>