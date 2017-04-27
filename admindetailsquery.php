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
<html>
<head>
	<title>Conquer</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css1/bootstrap.min.css">
	<link rel="stylesheet" href="css1/style.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>   
			<div  id="tmNavbar">
				<ul class="nav navbar-nav">
					<li><a href="main.html">Homepage</a></li>
					<li><a href="student_details_view.php" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="You can see all students information here">Students</a></li>
					<li><a href="guide_details_view.php" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Here you can see all guides information">Guides</a></li>
					<li><a href="department_details_view.php"  data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Details of student's departmet">Department</a></li>
					<li><a  href="Project_details_view.php" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="You can see all projet information here">Projects</a></li>
					<li><a  href="#" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="You can see all projet information here">Face Book</a></li>
					<li><a  href="# data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="You can see all projet information here">Twitter</a></li>
				</ul>
			</div>   
		</div>
	</nav>    

	<div id="section1">
		<header id="header-area" class="intro-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<div class="header-content">
							<h1 style="color:red;">ADMIN<h1><h3>Welcome to PESIT PROJECT MASTER</h3>
							<h4>We have to add our php table here</h4>
						</div>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div id="section2">
		<!-- Start Feature Area -->
		<section id="feature-area" class="about-section">
			<div class="container">
				<div class="row text-center inner">
					<div class="col-sm-4">
						<div class="feature-content">
							<img src="img/1-1.jpg" alt="Image">
							<h2 class="feature-content-title green-text">Students</h2>
							<p class="feature-content-description">Morbi sagittis justo a velit placerat ullamcorper quis quis velit. Sed convallis at risus ullamcorper auctor. Praesent quis velit neque. Quisque semper porta nisi vitae suscipit. Duis lectus magna, ornare ac scelerisque.
							</p>
							<a href="student_details_view.php" class="feature-content-link green-btn">Students Info</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="feature-content">
							<img src="img/1-2.jpg" alt="Image">
							<h2 class="feature-content-title blue-text">Guides</h2>
							<p class="feature-content-description">Conquer Template is provided by templatemo for free of charge. You can use this template for any kind of website. No credit link is required. All images by <a href="http://unsplash.com" target="_parent">Unsplash</a>. Thank you for visiting our website. Please come again!</p>                    
							<a href="guide_details_view.php" class="feature-content-link blue-btn">Guide Info</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="feature-content">
							<img src="img/1-3.jpg" alt="Image">
							<h2 class="feature-content-title red-text">Projects</h2>
							<p class="feature-content-description">Morbi sagittis justo a velit placerat ullamcorper quis quis velit. Sed convallis at risus ullamcorper auctor. Praesent quis velit neque. Quisque semper porta nisi vitae suscipit. Duis lectus magna, ornare ac scelerisque.
							</p>
							<a href="Project_details_view.php" class="feature-content-link red-btn">Project Info</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		

						<script src="js1/jquery-1.11.2.min.js"></script>
						<script src="js1/jquery.scrollUp.min.js"></script> 
						<script src="js1/jquery.singlePageNav.min.js"></script> 
						<script src="js1/parallax.js-1.3.1/parallax.js"></script> 
						<script>
						


   
    $(function() {  

    // Parallax
        $('.intro-section').parallax({
        	imageSrc: 'img/bg-1.jpg',
        	speed: 0.2
        });
        $('.services-section').parallax({
        	imageSrc: 'img/bg-2.jpg',
        	speed: 0.2
    	});
        $('.contact-section').parallax({
        	imageSrc: 'img/bg-3.jpg',
        	speed: 0.2
        });    

        // jQuery Scroll Up / Back To Top Image
        $.scrollUp({
                scrollName: 'scrollUp',     
		        scrollDistance: 300,         
		        scrollFrom: 'top',           
		        scrollSpeed: 1000,           
		        easingType: 'linear',        
		        animation: 'fade',          
		        animationSpeed: 300,         	        
		        scrollText: '', 	        
		        scrollImg: true                    
            });

       
        $( window ).on( 'scroll', function() {

            
            if ( $( document ).height() - $( window ).height() === $( window ).scrollTop() ) {

                $('#scrollUp').css( 'bottom', '80px' );

            } else {      
               
                $('#scrollUp').css( 'bottom', '30px' );        
            }
        });

        $('.single-page-nav').singlePageNav({
        	offset: $('.single-page-nav').outerHeight(),
        	speed: 1500,
        	filter: ':not(.external)',
        	updateHash: true
        });

        $('.navbar-toggle').click(function(){
        	$('.single-page-nav').toggleClass('show');
        });

        $('.single-page-nav a').click(function(){
        	$('.single-page-nav').removeClass('show');
        });
        
    });
	$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
				
		



</script>
</body>
</html>