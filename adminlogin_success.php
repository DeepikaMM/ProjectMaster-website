// Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 

<?php

if(!isset($_SESSION['myusername']) )
{
header("location: admindetailsquery.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>