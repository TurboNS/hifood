<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- Site title
   ================================================== -->
  <title>HiFood Register</title>

  <!-- Bootstrap CSS
   ================================================== -->
  <link rel="stylesheet" href="css/newbootstrap.min.css">

  <!-- Animate CSS
   ================================================== -->
  <link rel="stylesheet" href="css/animate.min.css">

  <!-- Font Icons CSS
   ================================================== -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/ionicons.min.css">

  <!-- Main CSS
   ================================================== -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Google web font 
   ================================================== --> 
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>
<?php include'connector.php';?>
    



<section id="header" class="header-one">
 
<div class="container">

     <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeInUp" data-wow-delay="1.6s">HiFood</h1>
              <h3 class="wow fadeInUp" data-wow-delay="1.9s">Served foods in your hand</h3>
              <p3 class="wow fadeInUp" data-wow-delay="1.9s">Sign Up here to access and let us help you find your favorite foods</p3>



<center>
<form method ='post'>
<?php

if(isset($_POST['register'])){
	$name= $_POST['name'];
	$dob= $_POST['dob'];
	
	$username= $_POST['username'];
	$password= ($_POST['password']);
	
	
	if(empty($username) or empty($password)){
		$message = "please fill the informations";
			}else{
				$conn = mysqli_connect($host, $user, $pass, $db);
				$query = "INSERT INTO users(id,name,username,password,dob) VALUES ('','$name', '$username','$password', '$dob')";
			
		mysqli_query($conn,$query); 
		$message="Registered";
	}
	echo "<p>$message</p>";
	header('location: index.php');
	
	}
	
?>
<p class="lead">Full Name: <input type='text' name='name'placeholder="Your full name"></p>
<p class="lead">Date/birth: <input type = "date" name = 'dob' placeholder="Your date of birth"></p>
<p class="lead">Username: <input type='text' name='username' placeholder="Pick your username"></p>
<p class="lead">Password: <input type='password' name='password' placeholder="Set up your password"></p>
<button type="submit" name="register" value="Register" class="btn btn-danger">REGISTER</button> 
<p class="lead">alreadyed a member?</p>
<a href="index.php" class="btn btn-success" role="button">Login</a>

</form>
</center>

</div>
</div>
</div>
</section>

  <footer>
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-sm-12">
        <p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2018 HiFood</p>
      <ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
          <li><a href="http://www.facebook.com/" class="fa fa-facebook"></a></li>
          <li><a href="http://www.twitter.com/" class="fa fa-twitter"></a></li>
          <li><a href="http://www.instagram.com/" class="fa fa-instagram"></a></li>
          <li><a href="https://plus.google.com/" class="fa fa-google-plus"></a></li>
        
        </ul>
      </div>
      
    </div>
  </div>
  </footer>


<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>