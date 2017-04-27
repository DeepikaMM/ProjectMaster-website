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
$reg= isset($_POST[ "reg" ]) ? $_POST[ "reg" ] : "";
$mail = isset($_POST[ "mail" ]) ? $_POST[ "mail" ] : "";
$dept = isset($_POST[ "dept" ]) ? $_POST[ "dept" ] : "";
$batch = isset($_POST[ "batch" ]) ? $_POST[ "batch" ] : "";
$pass = isset($_POST[ "pass" ]) ? $_POST[ "pass" ] : "";


$sql = "INSERT INTO student(student_id,student_name,student_mail,student_department,student_batch,password) VALUES ('$reg','$name','$mail','$dept','$batch','$pass')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head>
	
	
	   <link rel="stylesheet" href="style21.css">
</head>
</html>
