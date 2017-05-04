<?php
require_once("connection.php");
session_start();
if (isset($_POST['ter'])) {
if(!isset($_SESSION['user_id'])){
  header("location:index.html");
}
  $a = array();
$u = $_SESSION['user_id'];
$q = mysqli_query($con,"SELECT * FROM registeration WHERE user_id=$u");
if(mysqli_num_rows($q)>0){
  $values = mysqli_fetch_assoc($q);
  $a['a']=$values;
  $a['user_name']=$_SESSION['uname'];
  echo json_encode($a);
}
}
 ?>
