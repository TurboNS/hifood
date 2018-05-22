<?php
if(isset($_POST["cust"]))
{
 include("connector3.php");
 $cust = mysqli_real_escape_string($connect, $_POST["cust"]);
 $time = mysqli_real_escape_string($connect, $_POST["time"]);
 $comment = mysqli_real_escape_string($connect, $_POST["comment"]);
 $query = "
 INSERT INTO prepare(prepare_cust, prepare_time, prepare_comment)
 VALUES ('$cust', '$time', '$comment')
 ";
 mysqli_query($connect, $query);
}
?>