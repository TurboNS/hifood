<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>HiFood Contact</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HiFood Order</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	
		<style>
		body {
              padding-top: 50px;}
              .starter-template {
              padding: 40px 15px;
              text-align: center;}
	    </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">HiFood</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="toplist.php">Top List</a></li>
            <li><a href="prepare.php">Prepare Me</a></li>
            <li><a href="direction.php">Direction</a></li>
            <li class="active"><a href="contact.php">Contact Us</a></li>
            <li><a href="addmenu.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		
        <div class="starter-template">
          <h1>Contact Us</h1>
          <p class="lead">Please leave any comment or enquries</p>

<center>   

<div class="contact-form">
<form id="contact-form" name ="sendemail" action = " " method ='post'><br>
<input class="form-control" type="text" name="fullname" placeholder="Your full name"><br>
<input class="form-control" type = "text" name = "email" placeholder="Your email address"><br>
<input class="form-control" type="text" name="subject" placeholder="Subject"><br>
<textarea class="form-control" type="text" name="message" placeholder="Your message" row="4"></textarea></p>
<input class="btn btn-danger" type="submit" name="submit" value="SEND EMAIL"/>
</form>

</center>


<?php
if(isset($_POST['submit']))
{
  $name=$_POST['fullname'];
  $email=$_POST['email'];
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $adminemail="s.nuth@msn.com";

  //echo $name.' '.$email.' '.$subject.' '.$message;
  
  $headers="Reply-to:$email";
  mail($adminemail,$subject,$message,$headers);

}
?>
</div>
</div>   
  	   
	
  <!--footer-->
  <footer>
     <div class="container"> 
     <hr>
 
     <div class="row">
     <div class="col-lg-12">
        <p>Copyright 2018 &copy; Hifood ltd </p>
     </div>
     </div>
  </footer>
  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
