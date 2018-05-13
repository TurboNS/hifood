<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HiFood Top List</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
 

		

<?php
  session_start();
  if(!isset($_SESSION["sess_user"])){
          header("location:login.php");
  } else {
  ?>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
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
      <li class="active"><a href="toplist.php">Toplist</a></li>
      <li><a href="prepare.php">Prepare Me</a></li>
      <li><a href="order.php">Order</a></li>
      <li><a href="direction.php">Direction</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="admin.php">Admin</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>



    <div class="container">
    
        <div class="starter-template">
          <h1>Welcome "<?=$_SESSION['sess_user'];?>"</h1>
          <p class="lead">Let the HiFood find your favorite foods</p>
        </div>

<div class="container">
    <div class="row">
 
          <div class="header-thumb">
        
              <h1 class="wow fadeIn" data-wow-delay="1.6s">Top List</h1> 
              <h3 class="wow fadeInUp" data-wow-delay="1.9s">Here are some recommened restaurant for you</h3>
          </div>
     

    </div>
    
  <div class="panel-group iso-section wow fadeInUp" data-wow-delay="2.6s" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Restaurant one</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="iframe-wrap panel-body">
        <iframe width="600" height="450" frameborder="0" style="border:0"
		src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ55du2IwOZ0gRNal_7nS3UW0&destination=place_id:ChIJ-Tf6_IIOZ0gR4WvW49ZFp8I&key=AIzaSyCBX1k36RC7viSEdBefBbhmRWRYr76MDzY" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Restaurant two</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="iframe-wrap panel-body">
        <iframe width="600" height="450" frameborder="0" style="border:0"
		src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ55du2IwOZ0gRNal_7nS3UW0&destination=place_id:ChIJl9gur5sOZ0gRdWFOYPXJi6c&key=AIzaSyCBX1k36RC7viSEdBefBbhmRWRYr76MDzY" allowfullscreen></iframe>
      </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Restaurant three</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="iframe-wrap panel-body">
          <iframe width="600" height="450" frameborder="0" style="border:0"
		  src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ55du2IwOZ0gRNal_7nS3UW0&destination=place_id:ChIJ5UnePYMOZ0gRITeMaR_sf2E&key=AIzaSyCBX1k36RC7viSEdBefBbhmRWRYr76MDzY" allowfullscreen></iframe>
       </div>
      </div>
    </div>
     <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Restaurant four</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="iframe-wrap panel-body">
          <iframe width="600" height="450" frameborder="0" style="border:0"
		  src="https://www.google.com/maps/embed/v1/directions?origin=place_id:ChIJ55du2IwOZ0gRNal_7nS3UW0&destination=place_id:ChIJ-Tf6_IIOZ0gR4WvW49ZFp8I&key=AIzaSyBAOZuMVDCpaCDF4xgNmmEhduOEZQiAhCM" allowfullscreen></iframe>
       </div>
      </div>
    </div>
  </div> 
</div>


  	   
	
  <footer>
  <div class="container">
    <div class="row">

      <div class="col-md-12 col-sm-12">
        <p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2018 HiFood</p>
      </div>
      
    </div>
  </div>
  </footer>


<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>

  <?php
  }
  ?>