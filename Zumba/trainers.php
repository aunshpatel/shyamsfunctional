<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php
session_start();
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
	<title>Trainers</title>

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
						Trainer
					</h1>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start team Area -->
	<section class="team-area section-gap">
		<div class="container">
		
		<h1>Shyam Thing</h1>
		<h3>Head</h3><br/><br/>
			<div class="row justify-content-center d-flex align-items-left">
				
				<div class="col-md-6 col-lg-3 single-team ">
				<div class="row justify-content-between text-justify "><div class="single-about"><font color="black">
							<p><b>MR. SHYAM THING</b>, An Internationally Certified Fitness Trainer (ISSA {USA} & REHAB ESSENT. (AUST.) )  has been serving Barodians since 2008. He has been in the field of fitness since the past 10 Years and always stays on top of the current fitness trends, innovations and technologies while maintaining a commitment to what works for each client thereby giving THE BEST and THE LATEST from the field of fitness to his clients. 
					</p></font></div>
				</div>
				</div>
				<div class="col-md-9 col-lg-6 single-team">
					<div class="thumb">
						<img class="img-fluid" src="img/Trainer.jpg" alt="">
						<div class="align-items-center justify-content-center d-flex">
							<a href="https://www.facebook.com/Shyams-Functional-Fitness-Studio-858024620952164/?ref=br_rs" target="_blank"><i class="fa fa-facebook"></i></a>
							<!--<a href="#"><i class="fa fa-twitter"></i></a>-->
							<a href="https://www.instagram.com/shyamthing" target="_blank"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
					<!--<div class="meta-text mt-30 text-center">
						<h4>Shyam Thing</h4>
						<p>Managing Director (Sales)</p>
					</div>-->
				</div>
				<div class="col-md-6 col-lg-3 single-team ">
					<div class="row justify-content-between text-justify" style="color:black;"><div class="single-about">
							<p>
								<b>
									His qualifications include:
								</b> 
								<br/>
								1)International Sports Science Association- Certified Fitness Trainer (ISSA- CFT) (USA)<br/><br/>
								2)Accredited REHAB Trainer (REHAB ESSENTIALS)-AUSTRALIA<br/><br/>
								3)REEBOK Certified Aerobics Trainer-INDIA<br/><br/>
								4)Licensed ZUMBA Zin- Jammer - USA <br/><br/>
								5)Licensed “Doonya” (The Bollywood Workout) Instructor–USA<br/><br/>
								6)Licensed Bokwa Instructor – USA	 <br/><br/>
							</p>
						</div>
					</div>
				</div>
				

				
				
				<!--<div class="col-md-6 col-lg-3 single-team">
					<div class="thumb">
						<img class="img-fluid" src="img/t3.jpg" alt="">
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="meta-text mt-30 text-center">
						<h4>Dora Walker</h4>
						<p>Senior Core Developer</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 single-team">
					<div class="thumb">
						<img class="img-fluid" src="img/t4.jpg" alt="">
						<div class="align-items-center justify-content-center d-flex">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="meta-text mt-30 text-center">
						<h4>Lena Keller</h4>
						<p>Creative Content Developer</p>
					</div>
				</div>-->
				</div>
		</div>

	</section>
	<!-- End team Area -->
	
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

</html>