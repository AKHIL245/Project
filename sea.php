<html>
<head>
<title></title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 3px solid black;
  text-align: left;
  padding: 8px;
  font-size: 20px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
 
<body>
 
 
<?php
$connection=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($connection,'project1') or die(mysqli_error());
$Rol=$_POST['num'];


$query=mysqli_query($connection,"SELECT * FROM verified WHERE rollno='$Rol'") or die(mysqli_error($connection));


//if we get any results we show them in table data
if(mysqli_num_rows($query)>0):
 
?>
 
<table>
  <tr>
    <th align="center">Roll number</th>
    <th align="center">Student Name</th>
	<th align="center">Branch</th>
    <th align="center">Year</th>
	<th align="center">Section</th>
    <th align="center">Event Name</th>
	<th align="center">Organnisation</th>
    <th align="center">Category</th>
    <th align="center">Date</th>
    <th align="center">Status</th>
    
  </tr>
  <?php 
  // looping 
  while($row=mysqli_fetch_object($query)):?>
  <tr>
    <td align="center"><?php echo $row->rollno;  //row id ?></td>
    <td align="center"><?php echo $row->studentname; // row first name ?></td>
    <td align="center"><?php echo $row->branch; //row last name  ?></td>
    <td align="center"><?php echo  $row->year;//row contact number ?></td>
	<td align="center"><?php echo  $row->section;//row contact number ?></td>
    <td align="center"><?php echo $row->eventname; //row created time ?></td>
	<td align="center"><?php echo $row->orgname; // row first name ?></td>
    <td align="center"><?php echo $row->category; //row last name  ?></td>
    <td align="center"><?php echo $row->date; //row contact number ?></td>
    <td align="center"><?php echo $row->status;?></td>
  </tr>
  <?php endwhile;?>
</table>
<?php 
// no result show 
else: ?>
<h3>No Results found.</h3>
<?php endif; ?>
<a href="f.html" class="button">Previous page</a>
<a href="project.html" class="button">HomePage</a>
</body>
</html>