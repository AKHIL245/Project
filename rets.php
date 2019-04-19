<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "project1";

$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}

?>

<?php 
	$sql = "select * from students";
	$rs = mysqli_query($conn, $sql);
	//get row
	
	$row=mysqli_fetch_array($rs);
?> 
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 50%;
  padding: 15px 23px;
  margin: 8px 0;
  display: inline-block;
  border: 3px solid #ccc;
  border-radius: 11px;
  box-sizing: border-box;
}

input[type=date], select {
  width: 50%;
  padding: 15px 23px;
  margin: 8px 0;
  display: inline-block;
  border: 3px solid #ccc;
  border-radius: 11px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 40%;
  background-color: #4CAF50;
  color: white;
  padding: 15px 23px;
  margin: 8px 0;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 50px;
  margin-top: 0;
  margin-bottom: 0;
  margin-right: 460px;
  margin-left: 450px;
}
</style>
<body background="t.jpeg">



<div>

<marquee><h1 style="color:darkblue">ACHIEVEMENT ENTRY FORM</h1></marquee><br>
  <form action="facinsertp.php" method="post">
    
   <b><label for="rno">Roll No</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" id="rno" name="rollno" value="<?php echo $row["rollno"] ?>" required><br>
	<b><label for="sname">Student Name</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" id="sname" name="studentname" value="<?php echo $row["studentname"] ?>" required>
    <br>
    <b> <label for="br">Branch</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" id="br" name="branch" value="<?php echo $row["branch"] ?>" required><br>
      
	
	<b><label for="yr">Year</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" id="yr" name="year" value="<?php echo $row["year"] ?>" required>
      <br>
	
	<b><label for="se">Section</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" id="sec" name="section" value="<?php echo $row["section"] ?>" required>
      <br>

   
   
    <b><label for="ename">Event Name</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" id="ename" name="eventname" value="<?php echo $row["eventname"] ?>" required><br>

     <b><label for="oname">Organization Name</label></b>
    <input type="text" id="oname" name="orgname" value="<?php echo $row["orgname"] ?>" required><br>

    <b><label for="ct">Category</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" id="ct" name="category" value="<?php echo $row["category"] ?>" required>
      <br>

    <b><label for="dt" >Date</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="date" name="date" value="<?php echo $row["date"] ?>" required><br>
    
    <b><label for="st">Status</label></b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <input type="text" id="st" name="status" value="<?php echo $row["status"] ?>" required><br><br>
	<input type="submit" value="verify" onclick="javascript: form.action='verify.php';">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" value="discard" onclick="javascript: form.action='dicard.php';">
    
  </form>
</div>

</body>
</html>
