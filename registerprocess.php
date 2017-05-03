<?php
require_once("connection.php");
if (isset($_POST['f_name']) && isset($_POST['l_name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['dob']) && isset($_POST['phone']) && isset($_POST['gender']) && isset($_POST['jdate'])) {
session_start();
$_SESSION['f_name']=$_POST['f_name'];
$_SESSION['l_name']=$_POST['l_name'];
$_SESSION['email']=$_POST['email'];
$_SESSION['address']=$_POST['address'];
$_SESSION['dob']=$_POST['dob'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['gender']=$_POST['gender'];
$_SESSION['join_date']=$_POST['jdate'];
echo $_SESSION['join_date'];

} else {
  echo "hai";

}



 ?>
