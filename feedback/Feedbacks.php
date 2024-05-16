<!doctype html>
	<html>
		<head>
  		  <title>Feedback</title>
		  <link rel="stylesheet" href="css/bootstrap.min.css">
		  <script src="js/bootstrap.min.js"></script>
		  <script src="js/jquery-3.3.1.min.js"></script>
		  <link rel="stylesheet" href="Stylesheet.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		</head>
	<style>

:root {
    --bgcolor: #dde1e7;
    --textcolor: rgb(0, 0, 0);
    --boxshadow: rgb(0, 0, 0);
    /* --buttoncolor : rgb(238, 0, 255) ; */
  }
 

	body{
		/* background-image:url(Home%20page%20pics/background1.jpeg); */
		background-color: var(--bgcolor);
		background-repeat:no-repeat;
		background-attachment:fixed;
}


</style>	
<body>
<?php
require_once('../connection.php');
session_start();
$email = $_SESSION['email'];

if(isset($_POST['submit'])){
	$comment=mysqli_real_escape_string($con,$_POST['comment']);
	$sql="insert into  feedback (EMAIL,COMMENT) values('$email','$comment')";
	$result = mysqli_query($con,$sql);
	echo '<script>alert("Feedback Sent Successfully!!THANK YOU!!")</script>';
	// header("Location: ../dashbord.php");
	echo '<script>window.location.href = "../dashbord.php"</script>';


	
}





?>  

<button class="go_home" ><a href="../dashbord.php" style="text-decoration: none; color: white;">Go To Home</a></button>	

<br><br><br>
	<div id="form">	
		
		<div class="col-md-12" id ="mainform">
			<div class="col-sm-6">
			   <h2  class="contact-us" style="font-size:72px; color:black;"><strong style="font-size:5cm; color:black;">F</strong>eedback.</h2>
			   <h2 style=" color:black;">&rArr;</h2>
			</div>
			<div class="col-sm-6" >


				<form method="POST" >

				<label><h4>Name:</h4> </label><input type="text" name="name" size="20"  class=" form-control" placeholder="User name" required />
				<label><h4>Email:</h4></label> <input type="email" name="email" size="20"  class=" form-control" placeholder="User Email" required/>
				<h4>Comments:</h4><textarea class="form-control"   name="comment" rows="6"  placeholder="Message"  required></textarea>
				<br>
				<input type="submit" class="btn btn-info" id="btn" style="text-shadow:0 0 3px #000000; font-size:24px;" value="SUBMIT" name="submit">
				
				<form>
			</div>
		</div>
	</div>



	</body>
</html>
