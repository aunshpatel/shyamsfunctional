<?php session_start();?>
<html>
<head>
<title>Spencer</title>

<style>
    .button {
        background-color: #008CBA;
        border-radius: 8px;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    #myBtn:hover {
	  background-color: #555;
	}
	#loader {
		position: fixed;
		left: 50%;
		top: 50%;
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
<body background="Virtual-Assistants-Why-is-Call-to-Action-CTA-the-star-background-1024x683.jpg" onload="myFunction()" style="margin:0;">
    <?php ?>
    
	<div id="loader"></div><br/>
	<h1 style="color:white;text-align:center;">Welcome to Spencer</h1><br>
    <div style="display:none; text-align:center;" id="myDiv" class="animate-bottom">
    <!-- <center> -->
		<iframe 
			
			allow="microphone;"
			width="500"    
			height="500"
			src="https://console.dialogflow.com/api-client/demo/embedded/b393fe59-0af3-4eb7-93ab-d97d4e528966">
		</iframe><br/>
		<br>
		<form action="home.php"><button class="button">Go Back!</button></form>

    <!-- </center> -->
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