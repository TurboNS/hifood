<?php
if(isset($_POST["view"]))
{
 include("connector3.php");
 if($_POST["view"] != '')
 {
  $update_query = "UPDATE prepare SET prepare_status=1 WHERE prepare_status=0";
  mysqli_query($connect, $update_query);
 }
 $query = "SELECT * FROM prepare ORDER BY prepare_id DESC LIMIT 5";
 $result = mysqli_query($connect, $query);
 $output = '';
 
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
   <li>
    <a href="#">
     <strong>'.$row["prepare_cust"].'</strong><br />
     <small><em>'.$row["prepare_time"].'</em></small><br />
     <small><em>'.$row["prepare_comment"].'</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';
  }
 }
 else
 {
  $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
 }
 
 $query_1 = "SELECT * FROM prepare WHERE prepare_status=0";
 $result_1 = mysqli_query($connect, $query_1);
 $count = mysqli_num_rows($result_1);
 $data = array(
  'notification'   => $output,
  'unseen_notification' => $count
 );
 echo json_encode($data);
}
?>