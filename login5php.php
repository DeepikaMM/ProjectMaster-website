<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineprojectmanagementsystem1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$username = isset($_GET[ "a_id" ]) ? $_GET[ "a_id" ] : "";
$password= isset($_GET[ "pass" ]) ? $_GET[ "pass" ] : "";
$result=mysqli_query($conn,"SELECT * FROM administrator WHERE admin_id='$username' and password='$password'");

$count=mysqli_num_rows($result);
if ($count==1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row["ID"]==$password)
			echo "password is correct";
		
		else 
			echo "password incorrect";
	
    }
} else {
	echo "User name is incorrect";
    //echo "0 results";
}
$conn->close();
?>