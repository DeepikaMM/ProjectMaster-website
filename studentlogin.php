<?php
ob_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineprojectmanagementsystem1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define $myusername and $mypassword 
$myusername=$_POST['s_id']; 
$mypassword=$_POST['pass']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
//$myusername = mysqli_real_escape_string($myusername);
//$mypassword = mysqli_real_escape_string($mypassword);
//$sql="SELECT * FROM administrator WHERE admin_id='$myusername' and password='$mypassword'";
$result=mysqli_query($conn,"SELECT * FROM student WHERE student_id='$myusername' and password='$mypassword'");

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
$_SESSION['myusername']= "myusername";
//session_register("mypassword"); 
$_SESSION['mypassword']= "mypassword";
header("location:studentlogin_success.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>

