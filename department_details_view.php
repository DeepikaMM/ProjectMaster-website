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
$retval = mysqli_query($conn,"SELECT department_id,department_name,departmenthead_name FROM department" );
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
    echo "<br> Department_ID : " .$row["department_id"]  .
         "<br> Department_name: " .$row["department_name"]  .
		 "<br> Head of the Department : " .$row["departmenthead_name"] .
		 "<br>"		;
		 
 } 
 

mysqli_close($conn);
?>
<html>
<head>
<link href="style11.css" rel="stylesheet">
</head>
</html>

