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

$g_id= isset($_POST[ "g_id" ]) ? $_POST[ "g_id" ] : "";
$c_date = isset($_POST[ "c_date" ]) ? $_POST[ "c_date" ] : "";
$t_id = isset($_POST[ "t_id" ]) ? $_POST[ "t_id" ] : "";
$c_descp = isset($_POST[ "c_descp" ]) ? $_POST[ "c_descp" ] : "";


$sql = "INSERT INTO circular(guide_id,circular_date,team_id,circular_description) VALUES ('$g_id','$c_date','$t_id','$c_descp')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head>
<link href="style12.css" rel="stylesheet">
</head>
</html>
