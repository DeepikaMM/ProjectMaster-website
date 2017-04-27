<?php
//$fname=$_POST('Reg_No');
//echo $fname;
//$extract(_POST);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineprojectmanagementsystem1";
$conn = mysqli_connect($servername, $username, $password, $dbname);

   if (!$conn) 
   {
    die("Connection failed: " . mysql_connect_error());
    }

$s_id= isset($_POST[ "s_id" ]) ? $_POST[ "s_id" ] : "";
$t_id = isset($_POST[ "t_id" ]) ? $_POST[ "t_id" ] : "";

$sql = "INSERT INTO studentteam(student_id,team_id) VALUES ('$s_id','$t_id')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head>
<link rel="stylesheet" href="style23.css">
</head>
</html>
