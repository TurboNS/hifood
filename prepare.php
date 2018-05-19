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
          table {
          border-collapse: collapse;
          width: 75%;
          color: #588c7e;
          font-family: monospace;
          font-size: 15px;
          text-align: left;
          } 
          th {
          background-color: #588c7e;
          color: white;
          }
          tr:nth-child(even) {background-color: #f2f2f2}


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
          <a class="navbar-brand" href="toplist.php">HiFood</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="toplist.php">Top List</a></li>
            <li class="active"><a href="prepare.php">Prepare Me</a></li>
            <li><a href="order.php">Order</a></li>
            <li><a href="direction.php">Direction</a></li>
			      <li><a href="contact.php">Contact Us</a></li>
            <li><a href="addmenu.php">Admin</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
		
        <div class="starter-template">
          <h1>HiFood Prepare</h1>
          <p class="lead">Let HiFood help you to let the restaurant know you are on the way</p>
        </div>
		


  <center>
  <body>
        <table>
         <tr>
           <th>Customer</th> 
           <th>Food Item</th> 
           <th>Price</th>
         </tr>

  <?php

  $conn = mysqli_connect("173.194.109.118", "turbo", "turbo", "database");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT order_id, cust_id, item_name, price FROM order_menu";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
   echo "<tr> 
         <td>" . $row["cust_id"]. "</td>
         <td>" . $row["item_name"]. "</td>
         <td>" . $row["price"]. "</td></tr>";
   }
   echo "</table>";
   } else { echo "0 results"; }
   $conn->close();
   ?>
   </table>

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

