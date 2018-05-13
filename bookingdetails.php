<?php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">

    <meta  name="viewport"content="initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&sensor=false"></script>
    <style>
   
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


        #map-canvas{
            height:100%;
        }
        
        html,body{
            height:500px;
            margin:0;
            padding:0;
        }
      </style>
  </head>
<body>

<?php
$servername = "173.194.109.118";
$username = "turbo";
$password = "turbo";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, date, time, email, phone FROM tablebook";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table>
          <tr>
          <th>Name</th>
          <th>date</th>
          <th>time</th>
          <th>email</th>
          <th>phone</th>
          </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
              <td>
              " . $row["name"]. "
              " . $row["date"]. "
              " . $row["time"]. "
              " . $row["email"]. "
              " . $row["phone"]. "
              </td>
              </tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 





  <div class="container"> <!--footer-->
    <hr>
  <footer>
    <div class="row">
      <div class="col-lg-12">
        <p>Copyright 2017 &copy; Hifood ltd </p>
      </div>
    </div>
  </footer>
  </div><!--Footer-->
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
