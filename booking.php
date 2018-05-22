<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HiFood Booking</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
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
      <li><a href="toplist.php">Toplist</a></li>
      <li class="active"><a href="booking.php">Booking</a></li>
      <li><a href="prepare.php">Prepare Me</a></li>
      <li><a href="direction.php">Direction</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="admin.php">Admin</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>


<section>
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
       
         
            <div class="reservation-form-holder">
                <div class="reservation-form">
                    <div id="message"></div>
                    <?php
						include('connector.php');
						if(isset($_POST['submit'])){
							$date = $_POST['date'];
							$time = $_POST['time'];
							$numpeople = $_POST['numpeople'];
							$name = $_POST['name'];
							$email = $_POST['email'];
							$phone = $_POST['phone'];
							

								if(empty($date) or empty($time)){
		                        $message = "please fill the informations";
			                    }else{
				                $conn = mysqli_connect($host, $user, $pass, $db);
				                $query = "INSERT INTO tablebook(id,date,time,numpeople,name,email,phone) VALUES ('','$date', '$time','$numpeople', '$name', '$email', '$phone')";
			
		                        mysqli_query($conn,$query); 
		                        $message="Registered";
	                            }

                                echo "<script>alert('Your Table Reserved Successfully');</script>";

					
							}
					?>
                    <form method="post" action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Book a table</h3>
                                <!--date-->
                                <input type="date" name="date" class="form-control cus_form" required="required" />
                                <!--time--> 
                                <select name="time" class="form-control cus_form">
                                    <option selected="selected" value="7:00am">12:00 pm</option>
                                    <option value="12:30pm">12:30 pm</option>
                                    <option value="1:00pm">1:00 pm</option>
                                    <option value="1:30pm">1:30 pm</option>
                                    <option value="2:00pm">2:00 pm</option>
                                    <option value="2:30pm">2:30 pm</option>
                                    <option value="3:00pm">3:00 pm</option>
                                    <option value="3:30pm">3:30 pm</option>
                                    <option value="4:00pm">4:00 pm</option>
                                    <option value="4:30pm">4:30 pm</option>
                                    <option value="5:00pm">5:00 pm</option>
                                    <option value="5:30pm">5:30 pm</option>
                                    <option value="6:00pm">6:00 pm</option>
                                    <option value="6:30pm">6:30 pm</option>
                                    <option value="7:00pm">7:00 pm</option>
                                    <option value="7:30pm">7:30 pm</option>
                                    <option value="8:00pm">8:00 pm</option>
                                    <option value="8:30pm">8:30 pm</option>
                                    <option value="9:00pm">9:00 pm</option>
                                    <option value="9:30pm">9:30 pm</option>
                                    <option value="10:00pm">10:00 pm</option>
                                    <option value="10:30pm">10:30 pm</option>
                                    <option value="11:00pm">11:00 pm</option>
                                    <option value="11:30pm">11:30 pm</option>
                                </select>
               
                                <!--person-->    
                                <select class="form-control cus_form" name="numpeople">
                                    <option value="1 Person">1 Person</option>
                                    <option value="2 Peoples">2 Peoples</option>
                                    <option value="3 Peoples">3 Peoples</option>
                                    <option value="4 Peoples">4 Peoples</option>
                                    <option value="6 Peoples">6 Peoples</option>
                                    <option value="5 Peoples">8 Peoples</option>
                                    <option value="5 Peoples">10 Peoples</option>
                                </select>
                            
                                <h3>Contact Details</h3>
                                <!--name--> 
                                <input type="text" name="name" placeholder="Full name" class="cus_form form-control" required="required" />
                                <!--mail--> 
                                <input type="email" placeholder="xx@email.com" name="email" class="cus_form form-control" required="required" />
                                <!--phone--> 
                                <input type="text" placeholder="08x xxx xxxx" class="cus_form form-control" name="phone" required="required" />         
                            
                     
                        <div class="row">
                        	<div class="col-md-6"></div>
                            <div class="col-md-6">
                            	<button type="submit" name="submit" class="btn btn-success">BOOK TABLE</button>   
                            </div>
                        </div>
                        </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            
</section>


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