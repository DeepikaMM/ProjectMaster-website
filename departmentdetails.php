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
$hod = isset($_POST[ "hod" ]) ? $_POST[ "hod" ] : "";



$sql = "INSERT INTO department(department_id,department_name,departmenthead_name) VALUES ('$id','$name','$hod')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head>
<link rel="stylesheet" href="style16.css">
</head>
</html>

