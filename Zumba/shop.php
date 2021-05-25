<!DOCTYPE html>

<html lang="zxx" class="no-js" style="display: block;">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="file:///C:/Users/Shoab/Downloads/new%20template%20(1)/fin/Zumba/img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	
	<!-- Site Title -->
	<title>Shop Page</title>
	<?php
	session_start();
	?>
	<link href="./shop_files/css" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="./shop_files/linearicons.css">
	<link rel="stylesheet" href="./shop_files/font-awesome.min.css">
	<link rel="stylesheet" href="./shop_files/bootstrap.css">
	<link rel="stylesheet" href="./shop_files/magnific-popup.css">
	<link rel="stylesheet" href="./shop_files/nice-select.css">
	<link rel="stylesheet" href="./shop_files/animate.min.css">
	<link rel="stylesheet" href="./shop_files/owl.carousel.css">
	<link rel="stylesheet" href="./shop_files/jquery-ui.css">
	<link rel="stylesheet" href="./shop_files/main.css">
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
		}#loader {
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
	<div style="display:none;" id="myDiv" class="animate-bottom">
	<button type="button" id="mobile-nav-toggle"><i class="lnr lnr-menu"></i></button>
	<button onclick="parent.location='bot.php'" id="myBtn" title="Go to Chat Bot">Chat With Spencer</button>
	<!-- start header area -->
	<?php include 'header.html';?>
	<!-- End header area -->

	<!-- start banner Area -->
	<section class="banner-area relative about-banner" id="home">
		<img class="cta-img img-fluid" src="./shop_files/cta-img.png" alt="">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1>
					Supplement
					</h1>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start schedule Area -->
	<section class="schedule-area section-gap">
		<!--<img class="featured-img img-fluid" src="img/featured-class/feature-img.png" alt="">-->
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-lg-12">
					<div class="section-title-wrap text-center">
						<h1>Supplements List</h1>
						<!--<p>Buy the supplement according to your needs</p>-->
					</div>
				</div>
			</div>
			
			<div class="row justify-content-center">
			<div class="table-wrap col-lg-10">
			<?php
				$conn=mysqli_connect('localhost','root','','project') or die($mysqli_error);  

				//mysqli_select_db('project') or die("Can't select database");            
				$query= "SELECT * FROM supplements";
				$result=mysqli_query($conn,$query);
				
				$i=0;
				if (mysqli_num_rows($result)>=$i)
				{
					echo "<table class='schdule-table table table-bordered'> <thead class='thead-light' align='center'>";
					echo "<th class='head' scope='col'>Sr No</th>";
					echo "<th class='head' scope='col'>Photo</th>";
					echo "<th class='head' scope='col'>Name</th>";
					echo "<th class='head' scope='col'>Weight (in lbs)</th>";
					echo "<th class='head' scope='col'>Price (in INR)</th></tr></thead>";
					while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
					{
						echo "<tbody><tr align='center'>";
						echo "<td><font color='black'>".$row['Sr_no']."</font></td><td><img src=".$row['Photo']." width='125px' height='125px' ></td><td><font color='black'>".$row['Name']."</font></td><td><font color='black'>".$row['weight'] ."</font></td><td><font color='black'>".$row['Price']."</font></td></tr>";					
						echo "</tr></tbody>";
					}
					echo "</table>";
				}
				else{
					echo "No results found";
				}
				echo "<h4><font color='black'>Note: Prices are subject to change. <br/>
				<font color='red'>Please give us a call before ordering, so that you don't order the product which does not fit your needs.</font></font></h4>";
			?>
		</div>
	</section>
	<!-- End schedule Area -->

	

<form class="navbar-form" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
	<div class="input-group add-on align-items-center"></div>
								<!-- start footer Area -->
								<footer class="footer-area section-gap" style="height:350px;">
									<!-- <div class="container"> -->
										<div class="row" >
											<div class="col-lg-4 col-md-6 col-sm-6">
												<div class=single-about>
													<h4 style=" font-size:22px;">Our Belief</h4>
													<p style=" font-size:20px;"> 
														At Shyam's Functional Fitness Studio,<br/> we believe "Health is Wealth".
													</p>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-6">
												<div class=single-about>
													<h4 style=" font-size:22px;">Meet Us At</h4>
													<p style=" font-size:20px;">
														303, Third Floor, Pancham Street,<br/> Old Padra Road, Vadodara,<br/> Gujarat, India-390015
													</p>
													<!-- <p class="number">
														012-6532-568-9746 <br> 012-6532-569-9748
													</p> -->
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-6">
												<div class=single-about>
												<h4 style=" font-size:22px;">Designed and Developed by</h4>
												<p style=" font-size:20px;">Aunsh Patel, Jash Shah,<br/> &amp; Shoaib Shaikh</p>
												</div>
											</div>
										</div>
									<!-- </div> -->
								</footer>
	<!-- End footer Area -->


	<script src="./shop_files/jquery-2.2.4.min.js.download"></script>
	<script src="./shop_files/popper.min.js.download" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="./shop_files/bootstrap.min.js.download"></script>
	<script src="./shop_files/js"></script>
	<script src="./shop_files/easing.min.js.download"></script>
	<script src="./shop_files/hoverIntent.js.download"></script>
	<script src="./shop_files/superfish.min.js.download"></script>
	<script src="./shop_files/jquery.ajaxchimp.min.js.download"></script>
	<script src="./shop_files/jquery.magnific-popup.min.js.download"></script>
	<script src="./shop_files/jquery.tabs.min.js.download"></script>
	<script src="./shop_files/jquery.nice-select.min.js.download"></script>
	<script src="./shop_files/owl.carousel.min.js.download"></script>
	<script src="./shop_files/mail-script.js.download"></script>
	<script src="./shop_files/main.js.download"></script>
	<script>
		var myVar;

		function myFunction() {
			myVar = setTimeout(showPage, 0500);
		}

		function showPage() {
		document.getElementById("loader").style.display = "none";
		document.getElementById("myDiv").style.display = "block";
		}
	</script>

<!--<nav id="mobile-nav">
<?php
	if(isset($_SESSION["mem_em"]))  {
		echo "<a><b><font color='black'>Welcome ".$_SESSION['mem_em']."</font></b></a>";
	} 
	else if(isset($_SESSION["email"])) 
	{
		echo "<a><b><font color='black'>Welcome ".$_SESSION['email']."</font></b></a>";
	}
?>
<a href="tel:+91 9586977167">
	<span class="text">+91 9586977167</span>
</a>

	<ul class="" style="touch-action: pan-y;" id="">
	<li><a href="home.php">Home</a></li>
	<li><a href="about.php">About Us</a></li>
	<li><a href="trainers.php">Trainers</a></li>
	<li><a href="shop.php">Supplement</a></li>
	<?php
	if(isset($_SESSION["mem_em"])){
		
		echo "<li><a href='member.php'>Member Page</a></li>";
	}
	else if(isset($_SESSION["email"])){
		echo "<li><a href='admin.php'>Admin Page</a></li>";
	}
	?>
	<li class="menu-has-children"><a href="#">Details</a>
		<ul>
			<li><a href="schedule.php">Schedule</a></li>
			<li><a href="courses.php">Courses</a></li>
		</ul>
	</li>
	<li><a href="contact.php">Contact Us</a></li>
	<?php 
	if(isset($_SESSION["mem_em"]) || isset($_SESSION["email"])) {
		echo "<a class='book-now' href='logout.php'>Logout</a>";
		} else {
		echo "<a class='book-now' href='login.php'>Login</a>";
		}
	?>
	
</ul>
</nav>-->
<div id="mobile-body-overly"></div>
</div>
</body>
				
</html>