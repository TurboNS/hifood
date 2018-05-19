<?php
error_reporting(0);
$db = new mysqli('173.194.109.118', 'turbo', 'turbo', 'database');
//$db = new mysqli('localhost', 'root', '', 'db');
if($db->connect_errno){
	die('Sorry Database not connected !!!');
}
?>