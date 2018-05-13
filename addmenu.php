<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HiFood Add Menu</title>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

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
      <a class="navbar-brand" href="#">HiFood</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li><a href="toplist.php">Toplist</a></li>
      <li><a href="addcategory.php">Add Category</a></li>
      <li class="active"><a href="addmenu.php">Add Menu</a></li> 
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>



<?php include'connector.php';?>
    

<section id="header" class="header-one">
<div class="container">


<center>

<form class="form-horizontal" method ='post'>
<?php

if(isset($_POST['register'])){
  $menu_item = $_POST['menu_item'];
  $sub_menu_item = $_POST['sub_menu_item'];
  $price = $_POST['price'];
	
	
	if(empty($menu_item) or empty($price)){
		$message = "please fill the informations";
			}else{
				$conn = mysqli_connect($host, $user, $pass, $db);
				$query = "INSERT INTO sub_menu(sub_item_id,menu_item,sub_menu_item,price) VALUES ('','$menu_item','$sub_menu_item','$price')";
			
		mysqli_query($conn,$query); 
		$message="Registered";
	}
  echo "<script>alert('Successfully');</script>";
	}
	
?>


        <div class="form-group">
        <label for="menu_item" class="col-sm-4 control-label">Add Category</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="menu_item" placeholder="Category">
        </div>
        </div>

        <div class="form-group">
        <label for="sub_menu_item" class="col-sm-4 control-label">Add Food/Beverage</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="sub_menu_item" placeholder="Category">
        </div>
        </div>

        <div class="form-group">
        <label for="price" class="col-sm-4 control-label">Add Price</label>
        <div class="col-sm-4">
        <input type="text" class="form-control" name="price" placeholder="Price">
        </div>
        </div>
        
        <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
        <button type="submit" name="register" value="Register" class="btn btn-danger">ADD</button> 
        </div>
        </div>

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