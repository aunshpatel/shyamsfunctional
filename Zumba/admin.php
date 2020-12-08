<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php session_start();  ?>
<?php
	if(isset($_SESSION["email"]))  { 
?>
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Admin Page</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style1.css">
	
	<style>
		#myBtn {
			
			position: fixed;
			bottom: 10px;
			right: 10px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: #2c5abd;
			color: white;
			cursor: pointer;
			padding: 15px;
			border-radius: 4px;
		}
		#myBtn:hover {
		background-color: #555;
		}
		#loader {
			position: fixed;
			left: 45%;
			top: 45%;
			z-index: 1;
			width: 100%;
			height: 100%;
			margin: -75px 0 0 -75px;
			border: 16px solid #f3f3f3;
			border-radius: 50%;
			border-top: 16px solid blue;
			border-right: 16px solid green;
			border-bottom: 16px solid red;
			border-left: 16px solid pink;
			width: 220px;
			height: 220px;
			-webkit-animation: spin 2s linear infinite;
			animation: spin 2s linear infinite;
			
			}

			@-webkit-keyframes spin {
			0% { -webkit-transform: rotate(0deg); }
			100% { -webkit-transform: rotate(360deg); }
			}

			@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
			}

			/* Add animation to "page content" */
			.animate-bottom {
			position: relative;
			-webkit-animation-name: animatebottom;
			-webkit-animation-duration: 1s;
			animation-name: animatebottom;
			animation-duration: 1s
			}

			@-webkit-keyframes animatebottom {
			from { bottom:-100px; opacity:0 } 
			to { bottom:0px; opacity:1 }
			}

			@keyframes animatebottom { 
			from{ bottom:-100px; opacity:0 } 
			to{ bottom:0; opacity:1 }
			}

			#myDiv {
			display: none;
			text-align: center;
			}
	</style>
</head>

<body onload="myFunction()" style="margin:0;">
	<div id="loader"></div>
	<?php 
		if(isset($_POST["login"]))
		{  
			
			if(!empty($_POST['email']) && !empty($_POST['password'])) 
			{  
				$em=$_POST['email'];  
				$pass=$_POST['password'];  
				$_SESSION['EMAIL']=$em;
				$conn=mysqli_connect('localhost','root','','project') or die($mysqli_error);  
	
				//mysqli_select_db('project') or die("Can't select database");  
				$query=mysqli_query($conn,"SELECT * FROM member WHERE Email='".$em."' AND Password='".$pass."'");  
				$numrows=mysqli_num_rows($query);  
				if($numrows!=0)  
				{  
					while($row=mysqli_fetch_assoc($query))  
					{  
					$dbem=$row['Email'];  
					$dbpassword=$row['Password'];  
					}  

					if($em == $dbem && $pass == $dbpassword)  
					{  
						$_SESSION['email']=$em;  
						echo "<script type='text/javascript'>";
						echo "alert('Login Successful');"; 
						echo "window.location.href='about.php';";
						echo "</script>";     
					}  
				} 
					else 
						{  
						echo "<script type='text/javascript'>";
						echo "alert('Login failed. Please try again');"; 
						echo "window.location.href='admin.php';";
						echo "</script>";
					}  
			} 
			
		}  
    ?>  
	<div style="display:none;" id="myDiv" class="animate-bottom">
	<button onclick="parent.location='bot.php'" id="myBtn" title="Go to Chat Bot">Chat With Spencer</button>
	<!-- start header area -->
	<?php include 'header.html';?>
	<!-- End header area -->

	<!-- start banner Area -->
	<section class="banner-area relative about-banner" id="home">
		<img class="cta-img img-fluid" src="img/cta-img.png" alt="">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1>
						Admin Page
					</h1>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start Features Area -->
	<section class="feature-area courses section-gap">
    
    <div class="header">
  	    <h2>Select an option from below</h2>
    </div>
	
    <form>
  	
        <div class="input-group1">
        <h3>For admin:</h3>
		<h4>
			<a href="addadmin.php">Add a new admin</a><br/>
			<a href="removeadmin.php">Remove an admin</a><br/>
			<a href="viewadmin.php">View admin details</a><br/>
			<a href="chadmin.php">Change admin details</a><br/><br/>
			Did Admin Forget Password?<br/><a href="adminforgot.php">Reset it here</a><br/><br/>
		</h4>
		<hr style=" background-color: black !important;  color: black !important;  border: solid 1px black !important;"/>
        </div>
        <div class="input-group1">
        <h3>For member:</h3>
		<h4>
			<a href="registration.php">Register a new member</a> <br/>
			<a href="chmember.php">Change member details</a><br/>
			<a href="viewmembers.php">View member details</a><br/>  
			<a href="removemember.php">Remove a member</a> <br/>
			<br/>
			Did Member Forget Password?<br/><a href="memberforgot.php">Reset it here</a><br/><br/>
		</h4>
		<hr style=" background-color: black !important;  color: black !important;  border: solid 1px black !important;"/>
        </div>
        <div class="input-group1" >
        <h3>Supplement:</h3>
		<h4>
			<a href="supadd.php">Add a Supplement</a><br/>
			<a href="remsup.php">Remove a Supplement</a><br/><br/>
		</h4>
		<hr style=" background-color: black !important;  color: black !important;  border: solid 1px black !important;"/>
        <h3>Batch:</h3>
        <h4>
			<a href="changebatch.php">Update Batch Data</a><br/><br/>
		</h4>
		<hr style=" background-color: black !important;  color: black !important;  border: solid 1px black !important;"/>
		<h3>Queries:</h3>
        <h4>
			<a href="queries.php">View Queries Of People</a><br/><br/>
		</h4> 

        </div>
        
    </form>
	</section>
	<!-- End Features Area -->

	<!-- start footer Area -->
	<?php include 'footer.html'?>
	<!-- End footer Area -->



	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.tabs.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
	<script>
		var myVar;

		function myFunction() {
			myVar = setTimeout(showPage, 1000);
		}

		function showPage() {
		document.getElementById("loader").style.display = "none";
		document.getElementById("myDiv").style.display = "block";
		}
	</script>
</div>	
</body>
<?php }
else if(isset($_SESSION["mem_em"])){
	echo "<script type='text/javascript'>";
	echo "alert('You are not authorized to use this page as you are not an admin.');"; 
	echo "window.location.href='home.php';";	
	echo "</script>"; 
}
else{
	echo "<script type='text/javascript'>";
	echo "alert('Please login to access this page.');"; 
	echo "window.location.href='adminlogin.php';";	
	echo "</script>"; 
}
?>
</html>