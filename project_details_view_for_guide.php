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
$retval = mysqli_query($conn,"SELECT project_id,project_name,technology,description,department_id,status FROM project" );
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
 if (mysqli_num_rows($retval) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}
 while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
  {
    echo "<br> Project_ID : " .$row["project_id"]   .
         "<br> Project_name: " .$row["project_name"]  .
         "<br> Technology: " .$row["technology"]  .
         "<br> Description : " .$row["description"]  .
		 "<br> Department_ID : " .$row["department_id"] .
		 "<br> Status : " .$row["status"] .
		 "<br>"		;
 } 

mysqli_close($conn);
?>

<html>
<head>
<link href="style28.css" rel="stylesheet">
</head>
<body>
	<p id="Descr"></p>
	<form method="POST" action="teamdetailsproject.php">
		<table>
			
			<tr>
				<td> Enter the Project ID whose u want to see the team </td>
				<td><input type="text" name="project_id" /></td>
			</tr>
			
				<td>Submit Here</td>
				<td><input type="submit" value="Send!" /></td>
			</tr>
			
		</table>	
	</form>
</body>
</html>
