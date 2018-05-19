<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Booking Details</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
    <style>
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
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
      <li><a href="addcategory.php">Add Category</a></li>
      <li><a href="addmenu.php">Add Menu</a></li> 
      <li class="active"><a href="bookingdetails.php">Booking List</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>

  <center>
  <body>
        <table>
         <tr>
           <th>Name</th> 
           <th>Date</th> 
           <th>Time</th>
           <th>Email</th> 
           <th>Phone</th>
         </tr>

  <?php

  $conn = mysqli_connect("173.194.109.118", "turbo", "turbo", "database");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT id, name, date, time, email, phone FROM tablebook";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
   echo "<tr> 
         <td>" . $row["name"]. "</td>
         <td>" . $row["date"]. "</td>
         <td>" . $row["time"]. "</td>
         <td>" . $row["email"]. "</td>
         <td>" . $row["phone"]. "</td></tr>";
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

