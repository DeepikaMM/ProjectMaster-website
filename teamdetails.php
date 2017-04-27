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
$name = isset($_POST[ "name" ]) ? $_POST[ "name" ] : "";
$id= isset($_POST[ "id" ]) ? $_POST[ "id" ] : "";
$tl_id = isset($_POST[ "tl_id" ]) ? $_POST[ "tl_id" ] : "";
$p_id = isset($_POST[ "p_id" ]) ? $_POST[ "p_id" ] : "";

$status = isset($_POST[ "status" ]) ? $_POST[ "status" ] : "";


$sql = "INSERT INTO team(team_id,team_name,teamleader_id,project_id) VALUES ('$id','$name','$tl_id','$p_id')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head>
<link href="style36.css" rel="stylesheet"/>
</head>
</html>

