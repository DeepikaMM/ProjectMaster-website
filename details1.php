<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['myusername']))
{
 header("Location: guidelogin.php");
}
$res=mysql_query("SELECT * FROM guide WHERE guide_id=".$_SESSION['myusername']);
$userRow=mysql_fetch_array($res);
?>

<html>
<head>

<title>Welcome - <?php echo $userRow['email']; ?></title>
</head>
<body>
<div id="header">
 <div id="left">
    <label>cleartuts</label>
    </div>
    <div id="right">
     <div id="content">
         hi' <?php echo $userRow['username']; ?>&nbsp;<a href="logout.php?logout">Sign Out</a>
        </div>
    </div>
</div>
</body>
</html>