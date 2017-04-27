<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "onlineprojectmanagementsystem1";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT student_id FROM guide WHERE guide_id=1TIIS001";
$result = $conn->query($sql);


    while($row = $result->fetch_num_row()) {
        echo "student_id: " . $row[0]. "<br>";
    }

$conn->close();
?>