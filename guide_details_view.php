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
$retval = mysqli_query($conn,"SELECT guide_id,guide_name,guide_rating,guide_mail,department_id FROM guide" );
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
    echo "<br> Guide_ID : " .$row["guide_id"]  .
         "<br> Guide_name: " .$row["guide_name"]  .
         "<br> Guide_mail : " .$row["guide_mail"]  .
		 "<br> Guide_Department : " .$row["department_id"] .
		 "<br>"		;
		 
 } 
 

mysqli_close($conn);
?>
<html>
<head>
 <link href="style9.css" rel="stylesheet">
 </head>
 </html>