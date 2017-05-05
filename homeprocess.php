<?php
require_once("connection.php");
session_start();
$a = array();
if (isset($_POST['ter'])) {
if(!isset($_SESSION['user_id'])){
  $a['user_name']="goback";
  // header("location:index.html");
}else {

$u = $_SESSION['user_id'];
$q = mysqli_query($con,"SELECT * FROM registeration WHERE user_id=$u");
if(mysqli_num_rows($q)>0){
  $values = mysqli_fetch_assoc($q);
  $a['a']=$values;
  $a['user_name']=$_SESSION['uname'];

}
}
}
  echo json_encode($a);
 ?>
