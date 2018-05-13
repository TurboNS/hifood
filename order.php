<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>HiFood Order</title>


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
      <a class="navbar-brand" href="#">HiFood</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
    <ul class="nav navbar-nav">
      <li><a href="toplist.php">Toplist</a></li>
      <li><a href="prepare.php">Prepare Me</a></li>
      <li class="active"><a href="order1.php">Order</a></li>
      <li><a href="direction.php">Direction</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="addmenu.php">Admin</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
  </div>
</nav>


 <body>
     


<div class="clearfix"></div> 

<!-- connect to database -->
<?php include'connector2.php';?>
    
<div class="container">
    <div class="row">

    </div>
    <div class="clearfix p10_0"></div>
    <div class="container booking_strip">
        <div class="row">
            <div class="col-md-3">CATEGORY</div>
            <div class="col-md-6">MENU</div>
            <div class="col-md-3">Your Order</div>
        </div>
    </div>
    <div class="clearfix" style="margin:1px auto; border-bottom:1px solid #FFF;"></div>
        <div class="container">
            <div class="col-md-3" style="background:#F7F7F7 !important; margin-left:-15px; margin-right:10px;">

        <!-- connect to database  -->    
        <?php
                    $mainmenu_query = $db->query("select * from `main_menu`") or die(mysqli_error());
                    while($mainmenu_row = mysqli_fetch_assoc($mainmenu_query)){
                        echo '<div class="booking_left"><a href="#'.$mainmenu_row['item_name'].'">'.$mainmenu_row['item_name'].'</a></div>';
                        echo '<div class="clearfix"></div>';
                    }
                ?>



        
            </div>
            <div class="col-md-5" style="background:#F7F7F7 !important;">
                <form action="#" method="post">
                <div style=" padding:5px 0px; margin:-40px 0px 0px 370px;"><input type="submit" name="submit" style=" style="position:fixed;"" value="submit" class="sub_menu_submit"></div>
                <div class="scroll-design">
                
                <!-- Start Menu 1 -->
          <?php
                    $mainmenu_query = $db->query("select * from `main_menu`") or die(mysqli_error());
                    while($mainmenu_row = mysqli_fetch_assoc($mainmenu_query)){ 
                        $main_item = $mainmenu_row['item_name']?>
                        <h4 style="padding:5px 0px 10px; font-size:15px; font-weight:bold; font-style:italic; text-transform:uppercase;" id="<?php echo $main_item?>"><?php echo $main_item?></h4>
                <div class="clearfix"></div>
                <div style="border-bottom:1px solid #333;"></div>
                
                <!-- Sub Menu -->
                            <?php 
                    $submenu_query = $db->query("select * from sub_menu where menu_item='$main_item'") or die(mysqli_error());
                    while($submenu_row = mysqli_fetch_assoc($submenu_query)){?>
                        
                        <div class="row">
                            
                            <div class="col-md-8">
                                <div class="booking_left_1 sub_menu_item"><a href="#"><?php echo $submenu_row['sub_menu_item']?></a></div>
                            </div>
                            <div class="col-md-4">
                                <div align="right"><i class="fa fa-inr" style="padding-top:20px; color:#000;"></i><span class="price"> <?php echo $submenu_row['price']?></span> &nbsp; &nbsp; &nbsp; <input type="checkbox" name="sub_menu[]" value="<?php echo $submenu_row['sub_item_id']?>" /></div>
                               
                            </div>
                        </div>  
                                            
                <?php
                } } echo '<div class="clearfix"></div>';    ?>


              </form>
            </div>
            </div>
            <div class="col-md-4" style="">
                <div class="row" style="background:#F7F7F7 !important; margin:0px -35px 0px -5px !important;">
            <?php
                        $i=1;
                        $price='';
                        if(isset($_POST['submit'])){ 
                            $rand = rand(10,10000);
                            $item_id = $_POST['sub_menu']; 
                            if($item_id !=''){                          
                            $query = $db->query("select * from sub_menu where sub_item_id IN('".implode("','",$item_id)."')") or die(mysqli_error());
                            while($row = mysqli_fetch_assoc($query)){
                                $sub_menu_item = $row['sub_menu_item'];
                                $cost = $row['price'];
                            ?>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="booking_left_1" style="font-weight:bold;"><a href="#"><?php echo $row['sub_menu_item']?></a></div>
                                </div>
                                <div class="col-md-4">
                                    <div align="right"><i class="fa fa-inr" style="padding-top:15px; color:#000;"></i> <?php echo $row['price']?></div>
                                </div>
                            </div>
                        

            <?php                       
                        $cust_id = "CUST_".$rand;
                        $sql = $db->query("INSERT INTO `order_menu`(`order_id`, `cust_id`, `item_name`, `price`) VALUES ('','$cust_id','$sub_menu_item','$cost')") or die(mysqli_error());
                        $price += $row['price'];    
                        $i++;}}}?>                  
                    <div class="clearfix"></div>
                    <div style="border-bottom:1px solid #333; margin:5px 15px 10px;"></div>
     
                    <div class="clearfix"></div>
                    <div class="row" style="padding-top:20px;">
                        <div class="col-md-8">
                            <div class="booking_left_1" style="font-weight:bold;"><a href="#">TOTAL</a></div>
                        </div>
                        <div class="col-md-4">
                            <div align="right"><i class="fa fa-inr" style="padding-top:15px; color:#000;"></i> <?php echo $price;?></div>
                        </div>
                    </div>
             
                    <a href="javascript:alert('Your Order has been Placed Successfully');" class="btn btn-success">CHECKOUT</a>
                
                    
              </div>
            </div>
      </div>
    <div class="clearfix" style="margin-bottom:30px;"></div>
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
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>

  <?php
  ?>