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
$myusername=$_POST['team_id']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$result=mysqli_query($conn,"SELECT * FROM team WHERE team_id='$myusername'");

while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
  {
    echo "<br> Team_ID : " .$row["team_id"]  .
		"<br> Team_Name : " .$row["team_name"]  .
		"<br> Team_leade ID : " .$row["teamleader_id"]  .
		"<br> Project_ID : " .$row["project_id"]  .
		 "<br>"		;
 } 
 
 $myusername = stripslashes($myusername);
$result=mysqli_query($conn,"SELECT * FROM circular WHERE team_id='$myusername'");

while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
  {
    echo "<br> Guide_ID : " .$row["guide_id"]  .
		"<br> Circular_date : " .$row["circular_date"]  .
		"<br> Team_ID : " .$row["team_id"]  .
		"<br> Circular_Description : " .$row["circular_description"]  .
		 "<br>"		;
 }
 
ob_end_flush();
?>

<html>
<head>
<link href="style25.css" rel="stylesheet">
</head>
<body>
	<p id="Descr"></p>
	<form method="POST" action="projectdetailsteam.php">
		<table>
			
			<tr>
				<td> Enter the project ID whose u want to see the project </td>
				<td><input type="text" name="project_id" /></td>
			</tr>
			
				<td>Submit Here</td>
				<td><input type="submit" value="Send!" /></td>
			</tr>
			
		</table>	
	</form>
</body>
</html>


