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
$result=mysqli_query($conn,"SELECT * FROM team WHERE project_id='$myusername'");

while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
  {
    echo "<br> Team_ID : " .$row["team_id"]  .
		"<br> Team_Name : " .$row["team_name"]  .
		"<br> Team_leader ID : " .$row["teamleader_id"]  .
		"<br> Project_ID : " .$row["project_id"]  .
		 "<br>"		;
 } 
 
ob_end_flush();
?>


