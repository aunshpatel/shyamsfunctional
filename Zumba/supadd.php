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
	<title>Add Supplement</title>

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
		if(isset($_POST['submit'])) {
    
            $name=$_REQUEST['name']; 
            $wght=$_REQUEST['weight'];
            $pr=$_REQUEST['price'];  
            $srno=$_REQUEST['srno'];
            $target_dir = "img/";
            $target_file = $target_dir . basename($_POST["imageUpload"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                
                $check = getimagesize($_POST["imageUpload"]);
                if($check !== false) {
                    
                    $uploadOk = 1;
                } else {
                    
                    $uploadOk = 0;
                }
            }
            //Process the image that is uploaded by the user
            $conn=mysqli_connect('localhost','root','','project') or die($mysqli_error);  
            //mysql_select_db('project') or die("Can't select database"); 
            //storind the data in your database
            $query= "INSERT INTO supplements VALUES ('$srno','$target_file','$name','$wght','$pr')";
            $result=mysqli_query($conn,$query);
            if($result){
                echo "<script type='text/javascript'>";
                echo "alert('Your supplement data has been submited.');"; 
                echo "window.location.href='admin.php';";
                echo "</script>";		
            }
            else{
                echo "<script type='text/javascript'>";
                echo "alert('Your supplement data has not been submited. Please try again!!');"; 
                echo "window.location.href='supadd.php';";
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
						Add Supplement
					</h1>
					<p>Please fillout the form to add a supplement</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start Features Area -->
	<section class="feature-area courses section-gap">
    
    <div class="header">
  	    <h2>Add Supplement</h2>
    </div>	
    <form method="POST" action="">
	
		<div class="input-group">        
            <label>Enter serial number:</label>
       
			<input type="text" name="srno" placeholder="Please Enter Serial Number" required>
			<?php
			$conn=mysqli_connect('localhost','root','','project') or die($mysqli_error);  

            //mysqli_select_db('project') or die("Can't select database");            
            $query= "SELECT Sr_no FROM supplements";
			$result=mysqli_query($conn,$query);
			
			$i=0;
			if (mysqli_num_rows($result)>=$i)
			{
				$a=mysqli_num_rows($result);
				echo "<font color='black'>The last serial number is: ".$a."</font>";
			}
			else{
				echo "No data. Please enter '1' as the serial number.";
			}
			?>
        </div>
  	    <div class="input-group2">        
            <label>Select an image:</label>
       
            <input type="file" name="imageUpload" id="imageUpload" required>
        </div>
        <div class="input-group">
            <label>Enter name:</label>
            <input type="text" name="name" placeholder="Enter Name Please" required>
        </div>
        <div class="input-group">
            <label>Enter weight (in KG):</label>
            <input type="text" name="weight" placeholder="Enter Weight Please (in KG)" required>
        </div>
        <div class="input-group">
            <label>Enter its price (in INR):</label>
            <input type="text" name="price" placeholder="Enter The Price Please (in INR)" required>
        </div>
        <div class="input-group" >
            <button type="submit" class="btn" name="submit">Add Data</button>   
            
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