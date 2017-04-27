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
$DID = isset($_GET[ "g_id" ]) ? $_GET[ "g_id" ] : "";
$result =mysqli_query($conn,"SELECT * FROM `guide` WHERE guide_id='$DID'");
?>

   <tr>
      <th>Guide_id</th>
	   <th>Password</th>
	  <th>Guide Name</th>
	   <th>Guide rating</th>
      <th>Guide mail</th>
	  <th>Guide Department</th>
	   
    </tr>
	<?php

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
        print "</td> <td>";
	

    }

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<title>Guide Guide</title>
	 
	<link href="css3/bootstrap.css" rel="stylesheet">
	 
	<link href="css3/main.css" rel="stylesheet">
 
	
 
	<link rel="shortcut icon" href="images/favicon.png">
	<script src="js3/pace.js"></script>
 
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="preloader"></div>
	
  
	<main id="top" class="masthead" role="main">
		<div class="container">
			<div class="logo"> <h1 style="color:red;">GUIDE<h1><h3>WELCOME TO PESIT PROJECT MASTER</h3>
			</div>
 
			<h1>Add php here  <h1>
 
			<div class="row">
				<div class="col-md-6 col-sm-12 col-md-offset-3 subscribe">
					<form class="form-horizontal" role="form" action="subscribe.php" id="subscribeForm" method="POST">
						<div class="form-group">
							<div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
								<button class="btn btn-success btn-lg">Projects</button>
							</div>
							<div class="col-md-5 col-sm-4">
								<button type="submit" class="btn btn-success btn-lg">Students</button>
							</div>
						</div>
					</form>
					<span id="result" class="alertMsg"></span> </div>
				</div>
 
				<a href="index.html#explore" class="scrollto">
				
				<p class="scrollto--arrow"><img src="images/scroll_down.png" alt="scroll down arrow"></p>
				</a>
		</div><! --/container -->
	</main><! --/main -->
 

   

		
		<section class="row features">
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/service_01.png" alt="analytics-icon">
					<div class="caption">
						<a href="student_details_view_for_guide.php">Students</a>
						<p>Here you can see your students details.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/service_02.png" alt="analytics-icon">
					<div class="caption">
						<a href="teamdetails.php"> Team </a>
						<p>Here you can see the team your student.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/service_03.png" alt="analytics-icon">
					<div class="caption">
						<a href="project_details_view_for_guide.php">Projects</a>
						<p>Here you can see all your studnets projects.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
 
			<div class="col-sm-6 col-md-3">
				<div class="thumbnail"> 
					<img src="images/service_04.png" alt="analytics-icon">
					<div class="caption">
					<a href="commentdetails.php">comments</a>
						
						<p>Here you can see students discussion.</p>
					</div>
				</div><! --/thumbnail -->
			</div><! --/col-sm-6-->
		</section><! --/section -->
 

	    
		<div class="section-title">
			<h2>Some of my students awesome work</h2>
			<h4>We work with different kind of projects</h4>
		</div>
	
		<section class="row clientlogo breath">
			<div class="col-md-12 text-center"> 
				<img src="images/client-logos.png" alt="client-logos">
			</div>
		</section>
 
	</div><! --/container -->
 

	    
 
 
<script src="js3/jquery.js"></script>
<script src="js3/bootstrap.js"></script>
<script src="js3/easing.js"></script>
<script src="js3/nicescroll.js"></script>
 
 
<script>


 $(function() {
    $('.scrollto, .gototop').bind('click',function(event){
		 var $anchor = $(this);
		 $('html, body').stop().animate({
         scrollTop: $($anchor.attr('href')).offset().top
          }, 1500,'easeInOutExpo');
     event.preventDefault();
      });
  });
        

</script>
 
</body>
</html>
