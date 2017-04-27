<?php
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
$sql = "INSERT INTO guide(guide_id,password,guide_name,guide_rating,guide_mail,department_id)VALUES('1TIIS001','sin','Sindhu','5','sindhu@gmail.com','ISE')";
$sql = "INSERT INTO guide(guide_id,password,guide_name,guide_rating,guide_mail,department_id)VALUES('1TICS001','chan','Channa Bankapur','5','channa@gmail.com','CSE')";
$sql = "INSERT INTO guide(guide_id,password,guide_name,guide_rating,guide_mail,department_id)VALUES('1TIME001','sur','Suresh','4','suresh@gmail.com','ME')";
$sql = "INSERT INTO student(student_id,password,student_name,student_mail,student_department,student_batch,guide_id)VALUES('1PI14IS001','IS001','ANISH','anish@gmail.com','ISE','2014','1TIIS001')";
$sql = "INSERT INTO student(student_id,password,student_name,student_mail,student_department,student_batch,guide_id)VALUES('1PI14CS001','CS001','KARTHIK','karthik@gmail.com','CSE','2014','1TICS001')";
$sql = "INSERT INTO student(student_id,password,student_name,student_mail,student_department,student_batch,guide_id)VALUES('1PI14ME001','ME001','PRAVEEN','praveen@gmail.com','ME','2014')";
$sql = "INSERT INTO department(department_id,department_name,departmenthead_name)VALUES('ISE','Information science Engineering','Dr.Shylaja SS')";
$sql = "INSERT INTO department(department_id,department_name,departmenthead_name)VALUES('CSE','Computer science Engineering','Dr.Kavi Mahesh')";
$sql = "INSERT INTO department(department_id,department_name,departmenthead_name)VALUES('ME','Mechanical Engineering','D Jawahar')";

$sql = "INSERT INTO project(project_id,project_name,technology,description,department_id,status)VALUES('PT001','FaceRecognition','LBPH','Find the faces of persons and recognize their faces','ISE','Completed')";
$sql = "INSERT INTO administrator(admin_id,admin_name,password)VALUES('1AD001','JAWAHAR','pass')";
$sql = "INSERT INTO project(project_id,project_name,technology,description,department_id,status)VALUES('PT002','WebDesigning','HTML','Creating pages using html ','ISE','Completed')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
