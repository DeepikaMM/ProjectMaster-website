<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "onlineprojectmanagementsystem";
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database) or die("Could not connect database");
//mysql_select_db($mysql_database, $bd)or die("Could not select database");
$sql ="insert into student()
?>	