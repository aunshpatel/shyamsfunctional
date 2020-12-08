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
	<title>Schedule Page</title>

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
	<?php
        if(isset($_POST["search"])){  
           
            $dy=$_POST['day'];
            
            $conn=mysqli_connect('localhost','root','','project') or die($mysqli_error());  
  
            //mysql_select_db('project');  
            $sql = "UPDATE batches SET $dy='$act' WHERE Timings='$tm' ";
            $result=mysqli_query($sql,$conn);
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
						Batches
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
						<h1>Schedule your Fitness Process</h1>
						
					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="table-wrap col-lg-10">	
					<?php
						$conn=mysqli_connect('localhost','root','','project') or die($mysqli_error());  

						//mysql_select_db('project') or die("Can't select database");            
						$query= "SELECT * FROM batches";
						$result=mysqli_query($conn,$query);
						$i=0;
						if (mysqli_num_rows($result)>=$i)
						{
							echo "<table class='schdule-table table table-bordered'>";
						
							echo "<thead class='thead-light'><tr><th>Timings</th>";
							echo "<th>Monday</th>";
							echo "<th>Tuesday</th>";
							echo "<th>Wednesday</th>";
							echo "<th>Thursday</th>";
							echo "<th>Friday</th>";
							echo "<th>Saturday</th></tr></thead>";
							while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
							{
								echo "<tr align='center'>";
								echo "<td><font color='black'>".$row['Timings']."</font></td><td><font color='black'>".$row['Monday']."</font></td><td><font color='black'>".$row['Tuesday'] ."</font></td><td><font color='black'>".$row['Wednesday']."</font></td><td><font color='black'>".$row['Thursday']."</font></td><td><font color='black'>".$row['Friday']."</font></td><td><font color='black'>".$row['Saturday']."</font></td>";					
								echo "</tr></b>";	
							}
							echo "</table>";echo "<h4><b>PT=Personal Training &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	U/B=Upper Back &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	L/B=Lower Back</b></h4>";
						}
						
						else{
							echo "No results found";
						}
					?>						
				</div>
			</div>
		</div>
	</section>
	<!-- End schedule Area -->

	

	<form class="navbar-form" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
	method="get">
	<div class="input-group add-on align-items-center"></div>
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