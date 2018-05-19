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
  <title>HiFood Login</title>

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
    
	
   <!-- <nav class="navbar navbar-inverse navbar-fixed-top">-->
   <!--   <div class="container">-->
   <!--     <div class="navbar-header">-->
   <!--       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">-->
   <!--         <span class="sr-only">Toggle navigation</span>-->
   <!--         <span class="icon-bar"></span>-->
   <!--         <span class="icon-bar"></span>-->
   <!--         <span class="icon-bar"></span>-->
   <!--       </button>-->
   <!--       <a class="navbar-brand" href="#">Bykimon</a>-->
   <!--     </div>-->
   <!--     <div id="navbar" class="collapse navbar-collapse">-->
   <!--       <ul class="nav navbar-nav">-->
			<!--<li><a href="register.php">Register</a></li>-->
   <!--         <li class="active"><a href="login.php">Login</a></li>-->
   <!--       </ul>-->
   <!--     </div><!--/.nav-collapse -->
   <!--   </div>-->
   <!-- </nav>-->

<section id="header" class="header-one">
 
<div class="container">

     <div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="1.6s">HiFood Login</h1>
              <h3 class="wow fadeInUp" data-wow-delay="1.9s">Let HiFood help you find your favorite foods</h3>

<center>
<form action="login.php" method="POST">	
<p class="lead">Username: <input type="text" name="username" placeholder="Your username"></p>
<p class="lead">Password: <input type="password" name="psword" placeholder="Your password"></p>
<button type="submit" name="submit" value="Login" class="btn btn-success">LOGIN</button> 
<a href="register.php" class="btn btn-danger" role="button">REGISTER</a>
</form>
</center>

<?php
//if(isset($_POST["submit"]))	
if(!empty($_POST['username']) && !empty($_POST['psword'])) {
        $username=$_POST['username'];
        $password=$_POST['psword'];
		
 
        $con=mysqli_connect('173.194.109.118','turbo','turbo', 'database');
		if (!$con) {
			echo 'Can not connect to database';
			die("");
		}
 
        $query=mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password'");
		//flush($query);
        $numrows=mysqli_num_rows($query);
		echo $numrows;
        if($numrows!=0)
        {
        while($row=mysql_fetch_assoc($query))
        {
        $username=$row['username'];
        $password=$row['psword'];
        }
 
        if($username == $username && $password == $password)
        {
        session_start();
        $_SESSION['sess_user']=$username;
 
        /* Redirect browser */
        header("Location: toplist.php");
        }
        } else {
        echo "Invalid username or password!";
        }
 
} else {
        echo "";
}
?>

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
