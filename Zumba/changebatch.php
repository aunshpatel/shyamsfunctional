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
	<title>Change Batch Info</title>

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
        if(isset($_POST["change"]))
        {  
            $tm=$_POST['timings'];
            $dy=$_POST['day'];
            $act=$_POST['activity'];
            $conn=mysqli_connect('localhost','root','','project') or die($mysqli_error); 
  
            //mysqli_select_db('project');  
            $sql = "UPDATE batches SET $dy='$act' WHERE Timings='$tm' ";
            $result=mysqli_query($conn,$sql);
            if($result)  
			{ 	
				echo "<script type='text/javascript'>";
				echo "alert('Details updated');"; 
				echo "window.location.href='admin.php';";
				echo "</script>"; 
            } 
            else 
            {  
            	echo "<script type='text/javascript'>";
                echo "alert('Details Not updated');"; 
                echo "window.location.href='changebatch.php';";
                echo "</script>";
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
						Change Batch Data
					</h1>
					<p class="link-nav">Change the batch data using the below given form</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start Features Area -->
	<section class="feature-area courses section-gap">
    
    <div class="header">
  	    <h2>Welcome admin, change details using the form below</h2>
    </div>
	
    <form method="POST" action="">
  	
        <div class="input-group">
            <label>Select time:</label>
            <select id="timings" name="timings">							
                <option value="0" name="0">Select a time</option>
                <option value="6:30 to 7:30 AM" name="6:30 to 7:30 AM">6:30 to 7:30 AM</option>
                <option value="7:40 to 8:40 AM" name="7:40 to 8:40 AM">7:40 to 8:40 AM</option>
                <option value="9:00 to 10:00 AM" name="9:00 to 10:00 AM">9:00 to 10:00 AM</option>
                <option value="10:15 to 11:15 AM" name="10:15 to 11:15 AM">10:15 to 11:15 AM</option>
                <option value="5:00 to 6:00 PM" name="5:00 to 6:00 PM">5:00 to 6:00 PM</option>
                <option value="6:00 to 7:00 PM" name="6:00 to 7:00 PM">6:00 to 7:00 PM</option>
                <option value="7:15 to 8:15 PM" name="7:15 to 8:15 PM">7:15 to 8:15 PM</option>
            </select> 
        </div>
        
        <div class="input-group">
            <label>Select day:</label>
            <select id="day" name="day">
                    <option value="0" name="0">Select a Day</option>
                    <option value="Monday" name="Monday">Monday</option>
                    <option value="Tuesday" name="Tuesday">Tuesday</option>
                    <option value="Wednesday" name="Wednesday">Wednesday</option>
                    <option value="Thursday" name="Thursday">Thursday</option>
                    <option value="Friday" name="Friday">Friday</option>
                    <option value="Saturday" name="Saturday">Saturday</option>								
            </select> 
        </div>
        <div class="input-group">
            <label>Enter activity details:</label>
            <textarea cols="30" width="10" name="activity" placeholder="Enter activity data please" required></textarea>
        </div>
        <div class="input-group" >
            <button type="submit" class="btn" name="change">Change Details</button>   
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