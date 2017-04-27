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
//$DID = isset($_GET[ "a_id" ]) ? $_GET[ "a_id" ] : "";
//$password= isset($_GET[ "pass" ]) ? $_GET[ "pass" ] : "";
$result =mysqli_query($conn,"SELECT * FROM `student` WHERE student_id='1PI14IS001'");
//$result1 = $conn->query($result);
?>
<table border="2">
   <tr>
      <th>Student_id</th>
      <th>Password</th>
      <th>Name</th>
      <th>Mail</th>
	  <th>Department</th>
	  <th>Batch</th>
    </tr>
	<?php
	
 if (mysqli_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}
	//$row = $result1->fetch_row()
 while ($array = mysqli_fetch_row($result));
    {
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> <td>";
		echo $array[4]; 
        print "</td> <td>";
		echo $array[5]; 
        print "</td>";
    }
/*$result = $conn->query($sql);

if ($result->num_rows > 0) {
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
}*/
$conn->close();
?>