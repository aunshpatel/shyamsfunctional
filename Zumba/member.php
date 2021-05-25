<!DOCTYPE html>
<html lang="zxx" class="no-js">
<?php session_start();  ?>
<?php
	if(isset($_SESSION["mem_em"]))  {	 
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
	<title>Member Page</title>

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
						Member Page
					</h1>
					<!--<p>Hello member</p>-->
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start Features Area -->
	<section class="feature-area courses section-gap">
    <center>
		<?php
			$conn=mysqli_connect('localhost','root','','project') or die($mysqli_error);  
  
			//mysqli_select_db('project') or die("Can't select database");            
			$query= "SELECT * FROM member where Email='".$_SESSION['mem_em']."'";
			$result=mysqli_query($conn,$query);
			echo "<font color='black'>";
			echo "<table border='2'>";
			echo "<tr align='center'><th colspan='11'>Your Personal Details</th></tr>";
			echo "<tr align='center'><th>First Name</th>";
			echo "<th>Last Name</th>";
			echo "<th>Date of Birth</th>";
			echo "<th>Joining Date</th>";
			echo "<th>Height(in cm)</th>";
			echo "<th>Weight(in kg)*</th>";
			echo "<th>Gender</th>";
			echo "<th>Country Code</th>";
			echo "<th>Mobile Number</th>";
			echo "<th>Email</th>";
			echo "<th>Password</th></tr>";
			
			while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
			{
				// Date of birth starts
				$orgDate = $row['Birth_date'];  
    			$newDate = date("d F, Y", strtotime($orgDate));
				// Date of birth ends
				// Date of join starts
				$joinDate = $row['Join_date'];  
    			$newJoinDate = date("d F, Y", strtotime($joinDate));
				// Date of join ends
				echo "<tr align='center'>";
				echo "<td>".$row['First_name']."</td><td>".$row['Last_name']."</td><td>". $newDate ."</td><td>". $newJoinDate ."</td><td>".$row['Height'] ."</td><td>".$row['Weight'] ."</td><td>".$row['Gender']."</td><td>".$row['Country_Code']."</td><td>".$row['Mobile_no']."</td><td>".$row['Email']."</td><td>".$row['Password']."</td>";					
				echo "</tr>"; //Country_Code='$cc',
				
			}
			echo "</table>";
			echo "</font>";
		?>
		*weight considered here is as of the date of member joining
	</center>
    <div class="header">
  	    <h2>BMI CALCULATOR</h2>
    </div>
	
    <form method="POST">
  	
        <div class="input-group">
            <label>Enter your current weight (in kg):</label>
            <input type="text" name="weight" placeholder="Enter current weight please" required>
        </div>
        <div class="input-group">
            <label>Enter your height (in cm):</label>
            <input type="text" name="height" placeholder="Enter height please" required>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="calculate">Calculate BMI</button>
        </div>
        <div>
			<?php
				if(isset($_REQUEST["calculate"])){
					$height=$_POST['height'];
					$weight=$_POST['weight'];
					$bmi=($weight)/(($height/100)*($height/100));
					
					if($bmi<15){
						echo "<font color='red'>Your BMI is $bmi. You are very severly underweight!</font>";
					}
					else if($bmi>=15 && $bmi<16){
						echo "<font color='red'>Your BMI is $bmi. You are severly underweight!</font>";
					}
					else if($bmi>=16 && $bmi<18.5){
						echo "<font color='red'>Your BMI is $bmi. You are underweight";
					}
					else if($bmi>=18.5 && $bmi<=25){
						echo "<font color='green'>Your BMI is $bmi. You have normal weight.</font>";
					}
					else if($bmi>=25 && $bmi<30){
						echo "<font color='red'>Your BMI is $bmi. You are overweight!</font>";
					}
					else if($bmi>=30 && $bmi<35){
						echo "<font color='red'>Your BMI is $bmi. You are moderately overweight!</font>";
					}
					else if($bmi>=35 && $bmi<40){
						echo "<font color='red'>Your BMI is $bmi. You are severly overweight!</font>";
					}
					else{
						echo "<font color='red'>Your BMI is $bmi. You are very severly overweight!</font>";
					}
					
				}
			?>
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
else if(isset($_SESSION["email"])){
	echo "<script type='text/javascript'>";
	echo "alert('You are not authorized to use this page as you are not an admin.');"; 
	echo "window.location.href='home.php';";	
	echo "</script>"; 
}
else{
	echo "<script type='text/javascript'>";
	echo "alert('Please login to access this page.');"; 
	echo "window.location.href='login.php';";	
	echo "</script>"; 
}
?>
</html>