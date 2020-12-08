<?php
   	if(isset($_REQUEST['submit'])){  
		if(!empty($_POST['em']) && !empty($_POST['name']) && !empty($_POST['message'])  && !empty($_POST['subject']) && !empty($_POST['date'])) 
		{  
			$em=$_POST['em'];  
			$nm=$_POST['name'];  
			$mess=$_POST['message'];
			$subj= $_POST['subject'];
			$dt= $_POST['date'];
			$conn=mysqli_connect('localhost','root','','project') or die(mysqli_error());  

			//mysqli_select_db('project');  
			$sql="INSERT INTO query(Date,Name,Email,Subject,Message) VALUES('$dt','$nm','$em','$subj','$mess')";
			$result=mysqli_query($sql,$conn);  
			if($result)  
			{  
				echo "<script type='text/javascript'>";
				echo "alert('Your message has been sent. Our representatives will get in touch with you soon');"; 
				echo "window.location.href='contact.php';";
				echo "</script>"; 
			} 
			else 
			{  
				echo "<script type='text/javascript'>";
				echo "alert('Message has not been not sent. Please try again later.');"; 
				echo "window.location.href='contact.php';";
				echo "</script>"; 
			}
			 
		}	
	}						
?>