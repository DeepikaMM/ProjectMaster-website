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
$c_num= isset($_POST[ "c_num" ]) ? $_POST[ "c_num" ] : "";
$ques = isset($_POST[ "ques" ]) ? $_POST[ "ques" ] : "";
$ans = isset($_POST[ "ans" ]) ? $_POST[ "ans" ] : "";
$reply = isset($_POST[ "reply" ]) ? $_POST[ "reply" ] : "";


$sql = "INSERT INTO comment(student_id,comment_no,question,answer,reply) VALUES ('$s_id','$c_num','$ques','$ans','$reply')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<html>
<head>
 <link rel="stylesheet" href="style14.css">
</head>
</html>

