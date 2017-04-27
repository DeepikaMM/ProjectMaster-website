<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineprojectmanagementsystem1";
try {
	$conn = mysqli_connect($hostname, $username, $password, $dbname);
// $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 
 $sql = 'SELECT student_id FROM guide WHERE guide_id=1TIIS001';

 
 $q = $conn->query($sql);
 $q->setFetchMode(PDO::FETCH_ASSOC);
 
} catch (PDOException $pe) {
 die("Could not connect to the database $dbname :" . $pe->getMessage());
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP MySQL Query Data Demo</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div id="container">
 <h1>Employees</h1>
 <table class="table table-bordered table-condensed">
 <thead>
 <tr>
 <th>First Name</th>
 <th>Last Name</th>
 <th>Job Title</th>
 </tr>
 </thead>
 <tbody>
 <?php while ($r = $q->fetch()): ?>
 <tr>
 <td><?php echo htmlspecialchars($r['student_id'])?></td>
 </tr>
 <?php endwhile; ?>
 </tbody>
 </table>
</body>
</div>
</html>