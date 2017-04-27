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
$pass= isset($_POST[ "pass" ]) ? $_POST[ "pass" ] : "";
$rating = isset($_POST[ "rating" ]) ? $_POST[ "rating" ] : "";
$mail = isset($_POST[ "mail" ]) ? $_POST[ "mail" ] : "";
$dept = isset($_POST[ "dept" ]) ? $_POST[ "dept" ] : "";
$s_id = isset($_POST[ "s_id" ]) ? $_POST[ "s_id" ] : "";


$sql = "INSERT INTO guide(guide_id,guide_name,password,guide_rating,guide_mail,department_id,student_id) VALUES ('$id','$name','$pass','$rating','$mail','$dept','$s_id')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head>
<link rel="stylesheet" href="style17.css">
</head>
</html>

