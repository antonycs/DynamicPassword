<?php
require_once("connection.php");
if (isset($_POST['uname'])) {
$user = $_POST['uname'];
$b = array();
 session_start();
$query = mysqli_query($con,"SELECT user_id FROM login WHERE user_name='$user'");
if ($query) {
  if(mysqli_num_rows($query) > 0){
$_SESSION['uname']=$user;//check is there any error!
    $b['availablemsg']=true;
}else {
  $b['availablemsg']=false;
  $_SESSION['uname']=$user;
}

} else {
  $b['availablemsg']=false;
  $_SESSION['uname']=$user;
}


} else {
$b['availablemsg']=false;

}
echo json_encode($b);
 ?>
