<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>HiFood Prepare Me</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
		<style>
		      body {
          padding-top: 50px;}
          .starter-template {
          padding: 40px 15px;
          text-align: center;}
	  </style>
  </head>


<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#cust').val() != '' && $('#time').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"prepareinsert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Please fill in the form");
  }
 });
 
});
</script>


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
          <a class="navbar-brand" href="toplist.php">HiFood</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="toplist.php">Top List</a></li>
            <li class="active"><a href="prepare.php">Prepare Me</a></li>
            <li><a href="direction.php">Direction</a></li>
			      <li><a href="contact.php">Contact Us</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		
        <div class="starter-template">
          <h1>Prepare Me</h1>
          <p class="lead">Please give us your customer number and time for us to prepare your foods</p>
        </div>
		

   <center>

      <form method="post" id="comment_form">
    <div class="form-group">
     <label>Customer order</label>
     <input type="text" name="cust" id="cust" class="form-control" placeholder="your order number CUST_XXX">
    </div>
    <div class="form-group">
     <label>Food Expect time</label>
     <input type="time" name="time" id="time" class="form-control" placeholder="xx:xx">
    </div>
    <div class="form-group">
     <label>Additional Message</label>
     <textarea name="comment" id="comment" class="form-control" rows="5" placeholder="Add additional message, special require or food alergy in your order"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="post" id="post" class="btn btn-warning" value="PREPARE" />
    </div>
   </form>

   </center>
  	   
	
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

