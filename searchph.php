<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'project1';
mysqli_select_db($conn,$dbname);
$Roll=$_POST['ids'];

$query = "SELECT * FROM verified where rollno='$Roll'";
$result = mysqli_query($conn,$query) 
or die(mysqli_error($conn)); 
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\"><tr> 
<td width=100>ID</td> 
<td width=100>Roll No</td> 
<td width=100>Name</td> 
<td width=100>Branch</td> 
<td width=100>Year</td> 
<td width=100>Section</td> 
<td width=100>Event Name</td> 
<td width=100>Organisation</td> 
<td width=100>Category</td> 
<td width=100>Date</td> 
<td width=100>Status</td>
</tr>"; 

while($row = mysqli_fetch_assoc($result)) 
{ 
print "<tr>"; 
print "<td>" . $row['ID'] . "</td>"; 
print "<td>" . $row['rollno'] . "</td>"; 
print "<td>" . $row['studentname'] . "</td>";
print "<td>" . $row['branch'] . "</td>"; 
print "<td>" . $row['year'] . "</td>"; 
print "<td>" . $row['section'] . "</td>";
print "<td>" . $row['eventname'] . "</td>"; 
print "<td>" . $row['orgname'] . "</td>"; 
print "<td>" . $row['category'] . "</td>"; 
print "<td>" . $row['date'] . "</td>"; 
print "<td>" . $row['status'] . "</td>"; 
print "</tr>"; 
} 
print "</table>"; 
?>