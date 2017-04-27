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
$tech = isset($_POST[ "tech" ]) ? $_POST[ "tech" ] : "";
$desc = isset($_POST[ "desc" ]) ? $_POST[ "desc" ] : "";
$d_id = isset($_POST[ "d_id" ]) ? $_POST[ "d_id" ] : "";
$status = isset($_POST[ "status" ]) ? $_POST[ "status" ] : "";


$sql = "INSERT INTO project(project_id,project_name,technology,description,department_id,status) VALUES ('$id','$name','$tech','$desc','$d_id','$status')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head>
<link rel="stylesheet" href="style19.css">
</head>
</html>