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
$DID = isset($_GET[ "s_id" ]) ? $_GET[ "s_id" ] : "";
//$password= isset($_GET[ "pass" ]) ? $_GET[ "pass" ] : "";
$result =mysqli_query($conn,"SELECT * FROM `student` WHERE student_id='$DID'");
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
	
/* if (mysqli_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
}*/
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


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>student</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="logo">
  <h1><a href="#">Hai!!!</a></h1>
  <h2><a href="#">Welcome to Project Master</a></h2>
</div>
<div id="menu">
  <ul>

    <li><a href="#">Guide</a></li>
    <li><a href="#">Project</a></li>
    <li><a href="#">Team</a></li>
    <li><a href="#">Relation</a></li>
	<li ><a href="#">Comments</a></li>
  </ul>
</div>
<!-- end #menu -->
<div id="page">
  <div id="content">
    <div id="welcome" class="post">
      <div class="title">
        <h2>Welcome to PPM!</h2>
     
      <div class="story"> <img src="images/img6.jpg" alt="" width="112" height="112" class="left" />
        <p>If you want to create a new project enter all the details mentioned above OR if you want see your project click on the button below</p>
      </div>
	  <button href="project_details_view.php">YOUR PROJECTS</button>
    </div>
    
   
  </div>

</div>
</body>
</html>
