<?php
require_once("connection.php");
if (isset($_POST['uname'])) {
$user = $_POST['uname'];
$b = array();
 session_start();
$query = mysqli_query($con,"SELECT user_id FROM login WHERE user_name='$user'");
if ($query) {
  if(mysqli_num_rows($query) > 0){

    $b['availablemsg']="The user name already exist, try another.";
}else {
  $b['availablemsg']="Sucess! fill security questions.";
  $_SESSION['uname']=$user;
}

} else {
  $b['availablemsg']="Sucess! fill security questions.";
  $_SESSION['uname']=$user;
}


} else {
$b['availablemsg']="Oops,something went wrong.";

}
echo json_encode($b);
 ?>
