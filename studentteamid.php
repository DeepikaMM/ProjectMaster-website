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
$myusername=$_POST['st_id']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$result=mysqli_query($conn,"SELECT team_id FROM studentteam WHERE student_id='$myusername'");

while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
  {
    echo "<br> Team_ID : " .$row["team_id"]  .
		 "<br>"		;
 } 
 
ob_end_flush();
?>

<html>
<head>
 <link href="style24.css" rel="stylesheet">
</head>
<body>
	<p id="Descr"></p>
	<form method="POST" action="teamdetailsstudent.php">
		<table>
			
			<tr>
				<td> Enter the Team ID whose u want to see the team </td>
				<td><input type="text" name="team_id" /></td>
			</tr>
			
				<td>Submit Here</td>
				<td><input type="submit" value="Send!" /></td>
			</tr>
			
		</table>	
	</form>
</body>
</html>
