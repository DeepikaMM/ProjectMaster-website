<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


mysqli_select_db($conn,"onlineprojectmanagementsystem1");
$DID = isset($_GET[ "g_id" ]) ? $_GET[ "g_id" ] : "";
$retval = mysqli_query($conn,"SELECT student_id,student_name,student_mail,student_department,student_batch FROM student where guide_id='$DID' " );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 if (mysqli_num_rows($retval) == 0) {
    echo "No rows found, nothing to print so am exiting";
    
}
 while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
  {
    echo "<br> Student_ID : " .$row["student_id"]  .
         "<br> Student_name: " .$row["student_name"]  .
         "<br> Student_mail : " .$row["student_mail"]  .
		 "<br> Student_Department : " .$row["student_department"] .
		 "<br> Student_batch : " .$row["student_batch"] .
		 "<br>"		;
 } 

mysqli_close($conn);
?>

<html>
<head>
<link href="style27.css" rel="stylesheet">
</head>
<body>
	<p id="Descr"></p>
	<form method="POST" action="studentteamid.php">
		<table>
			
			<tr>
				<td> Enter the Student ID whose u want to see the team </td>
				<td><input type="text" name="st_id" /></td>
			</tr>
			
				<td>Submit Here</td>
				<td><input type="submit" value="Send!" /></td>
			</tr>
			
		</table>	
	</form>
</body>
</html>
