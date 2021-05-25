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
	<title>Shyam's Functional Fitness Studio</title>

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

		/*#loading {
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
			position: fixed;
			display: block;
			opacity: 0.7;
			background-color: #fff;
			z-index: 99;
			text-align: center;
			}

			#loading-image {
			position: absolute;
			top: 100px;
			left: 450px;
			z-index: 100;
			}*/
		}
	</style>
</head>

<body onload="myFunction()" style="margin:0;"> 
	<div id="loader"></div>
	<!--<div id="loading">
	<img id="loading-image" src="img/loader.gif" alt="Loading..." />
	</div>-->
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
						Contact Us
					</h1>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Start contact-page Area -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<!--<div class="map-wrap" style="width:100%; height: 217px;" id="map"></div>-->
				<div class="col-lg-4 d-flex flex-column address-wrap" style="text-align: left;">
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-clock"></span>
						</div>
						<div class="contact-details">
							<h5>Timings:</h5>
							<p>Monday to Saturday<br/>6:30 AM to 8:15 PM</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details">
							<h5>Contact Number:</h5>
							<p>+91 9586977167</p>
						</div>
					</div>
					<div class="single-contact-address d-flex flex-row">
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<h5>Address:</h5>
							<p>
								303, Third Floor, Pancham Highstreet,<br/> Old Padra Road,
								Vadodara,<br/> Gujarat, India-390015
							</p>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.538669217644!2d73.1623402142684!3d22.295458748706267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8a74594d445%3A0x534a26b271bc112b!2sShyam&#39;s+Functional+Fitness+Studio!5e0!3m2!1sen!2sus!4v1562619696035!5m2!1sen!2sus" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					
				</div>
				<div class="col-lg-8">
					<form class="form-area contact-form text-right" action="mail.php" method="post"><!--mail.php-->
						<div class="row">
							<div class="col-lg-6 form-group">
								<input type="text" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
								 class="common-input mb-20 form-control" oninvalid="setCustomValidity('Please enter your name')" required>

								<input type="email" name="em" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" onfocus="this.placeholder = ''" oninvalid="setCustomValidity('Please enter the email properly')" required>
								<input type="subject" name="subject" placeholder="Enter subject" class="common-input mb-20 form-control"  oninvalid="setCustomValidity('Please enter the subject of your query')" required>
								<input type="text" placeholder="Today's date" name="date" cols="30" onfocus="(this.type='date')" onblur="(this.type='text')" class="common-input mb-20 form-control" required>				
							</div>
							<div class="col-lg-6 form-group">
								
								<textarea name="message" class="common-textarea form-control" rows="10" cols="30" name="message" placeholder="Please Enter A Message" onfocus="this.placeholder = ''"
								onblur="this.placeholder = 'Please Enter A Message'" oninvalid="setCustomValidity('Please enter your message')" required></textarea>
								<b style="color:red;">All fields are required.</b>
							</div>
							<div class="col-lg-12">
								<div class="alert-msg" style="text-align: left;"></div>
								<button type="submit" class="genric-btn primary" name="submit" style="float: right;">Submit</button>
							</div>
							
						</div>
					</form>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->


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
	<!--<script language="javascript" type="text/javascript">
     $(window).load(function() {
     $('#loading').slideUp();
  });
</script>-->

</body>

</html>