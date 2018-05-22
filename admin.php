<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Prepare Order</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
          table {
          border-collapse: collapse;
          width: 75%;
          color: #7e588c;
          font-family: monospace;
          font-size: 15px;
          text-align: left;
                } 
          th {
          background-color: #7e588c;
          color: white;
             }
          tr:nth-child(even) {background-color: #f2f2f2}
    </style>

  </head>


<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"preparetake.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
 }, 5000);
 
});
</script>


  <body>

       

        
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
          <ul class="nav navbar-nav navbar-right">
            <li><a href="addcategory.php">Add Category</a></li>
            <li class="active"><a href="addmenu.php">Add Menu</a></li> 
            <li><a href="bookingdetails.php">Booking List</a></li>
            <li><a href="foodorder.php">Food Order</a></li> 
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-envelope" style="font-size:18px;"></span></a>
            <ul class="dropdown-menu"></ul></li>
            <li><a href="logout.php">Logout</a></li>
     
          </ul>
            </div>
         </div>
     </nav>
   
  <center>
  <body>
        <table>
         <tr>
           <th>Order</th> 
           <th>Expect food time</th> 
           <th>Addition Message</th>
         </tr>

  <?php

  $conn = mysqli_connect("localhost", "root", "", "db");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT prepare_id, prepare_cust, prepare_time, prepare_comment FROM prepare";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
   echo "<tr> 
         <td>" . $row["prepare_cust"]. "</td>
         <td>" . $row["prepare_time"]. "</td>
         <td>" . $row["prepare_comment"]. "</td></tr>";
   }
   echo "</table>";
   } else { echo "0 results"; }
   $conn->close();
   ?>
          </table>

   </center>


  
  </body> 
	
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
