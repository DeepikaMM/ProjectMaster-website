<?php
ob_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineprojectmanagementsystem1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define $myusername and $mypassword 
$myusername=$_POST['project_id']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$result=mysqli_query($conn,"SELECT * FROM project WHERE project_id='$myusername'");

while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
  {
    echo "<br> Project_ID : " .$row["project_id"]   .
         "<br> Project_name: " .$row["project_name"]  .
         "<br> Technology: " .$row["technology"]  .
         "<br> Description : " .$row["description"]  .
		 "<br> Department_ID : " .$row["department_id"] .
		 "<br> Status : " .$row["status"] .
		 "<br>"		;
 } 
 
ob_end_flush();
?>
<html>
<head>
<link rel="stylesheet" href="style20.css">
</head>
</html>
