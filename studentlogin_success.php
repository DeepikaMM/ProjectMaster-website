// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 

<?php
session_start();
//$_SESSION['myusername']= "myusername";
if(!isset($_SESSION['myusername']) )
{
//if(!session_is_registered(myusername)){
header("location: studentdetailsquery.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>