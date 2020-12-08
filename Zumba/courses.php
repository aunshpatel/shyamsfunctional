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
		<title>Courses</title>

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
				animation-duration: 1s;
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
		<!--<div id="loading">-->

			<div style="display:none;" id="myDiv" class="animate-bottom"><!--< id="contents">-->
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
								<h1 id="classes">  
									<!-- Gave ID to go to top of page -->
									Classes
								</h1>
								
							</div>
						</div>
					</div>
				</section>
				<!-- End banner Area -->

				<!-- Start Features Area -->
				<section class="feature-area courses section-gap">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="col-lg-12">
								<div class="section-title-wrap text-center">
									<h1>Our Classes</h1>
									<p>Basic information about the classes we provide</p>
								</div>
							</div>
						</div>
						<div class="row justify-content-center d-flex align-items-top text-justify ">
							<div class="col-lg-6 col-md-6 single-feature">
								<!--<figure>
									<img class="img-fluid" src="img/featured-class/f1.jpg" alt="">
									<div class="overlay overlay-bg"></div>
								</figure>-->
								<div>
									<h4 class="mb-10">What is AEROBICS? </h4>
									<p>
									Aerobics is a kind of physical exercise that integrates rhythmic aerobic exercise with stretching and strength training routines with the objective of improving all elements of fitness (flexibility, muscular strength, and cardio-vascular fitness). Generally it's performed in group with background music and this is choreographed and directed by a certified instructor with a speciality. There is floor and step aerobics. Steps are combined with arm gestures to increase large-muscle movements and increase fat-burning sequences are performed to music. <br/>
									<u>Aerobics helps to:</u><br/>
									Strengthen your bones, Reduces body fats, Stop weight gaining
									Prevent health problems, Strengthens the heart, Strengthen the respiratory system, Keep arteries clear, improves cognitive thinking and memory as well as improves problem solving abilities.
									</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 single-feature">
								<!--<figure>
									<img class="img-fluid" src="img/featured-class/f4.jpg" alt="">
									<div class="overlay overlay-bg"></div>
								</figure>-->
								<div>
									<h4 class="mb-10">Why Zumba®</h4>
									<p>
										MERENGUE, SALSA, CUMBIA, REGGAETON, BHANGRA, HIP-HOP, CATYPSO, SOCA
										It's perfect for everybody!Each Zumba® class is designed to bring people together to sweat it on.<br/>
										<u>How It Works:</u><br/>
										We take the "work" out of workout, it is mixing low-intensity and high-intensity moves for an interval-style, calorie-burning dance fitness party. Once the Latin and World rhythms take over, you'll see why Zumba® Fitness classes are often called exercise in disguise. Super effective? Check. Super fun? Check and check.<br/>
										<u>Benefits:</u><br/>
										A total workout, combining all elements of fitness – cardio, muscle conditioning, balance and flexibility, boosted energy and a serious dose of awesome each time you leave class. 

									</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 single-feature">
								<!--<figure>
									<img class="img-fluid" src="img/featured-class/f3.jpg" alt="">
									<div class="overlay overlay-bg"></div>
								</figure>-->
								<div>
									<h4 class="mb-10">Our Personal Training</h4>
									<p>
									The goal of our personal training program is to turn you into your own personal trainer. Only you are guaranteed to be with you the rest of your life. We don’t teach you how to use a particular equipment, we educate to teach you the proper technique - how to exercise properly to achieve goals, rehabilitate injuries, and prevent future injuries and maintain safety throughout the facility.
									In personal training we shape every session to clients’ specific needs. Whether you want to get lean, gain muscle, or increase your physical ability. It's never to late to feel and look great.

									</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 single-feature">
								<!--<figure>
									<img class="img-fluid" src="img/featured-class/f2.jpg" alt="">
									<div class="overlay overlay-bg"></div>
								</figure>-->
								<div>
									<h4 class="mb-10">What is Functional Training?</h4>
									<p>
									Functional fitness exercises are multi joint, multi muscle exercises, designed to train and develop your muscles to work together and make it more efficient and safer to perform everyday movements and activities such as carrying groceries or playing a game of basketball with your kids easier, reducing your risk of injury and improving your quality of life. It’s a 
									beneficial comprehensive program to improve balance, agility and muscle strength, and reduce the risk of falls.
									</p>
								</div>
							</div>
							
						</div>
					</div>
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
			<!-- Go to top button -->
			

		<!--</div>-->

	</body>

</html>