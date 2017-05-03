<?php
require_once("connection.php");
$questions = array();
 $uname = $_POST['uname'];
// echo $uname;
$w = mysqli_query($con,"SELECT * FROM login WHERE user_name='$uname'");
$a = mysqli_fetch_assoc($w);
$u = $a['user_id'];

$q = mysqli_query($con,"SELECT * FROM sqst WHERE user_id=$u");
if(mysqli_num_rows($q)>0){

  while($values = mysqli_fetch_assoc($q)){
    $questions[]=$values;

  }
echo json_encode($questions);
}else{
  $a = array('f' => "failed");
  echo json_encode($a);
}


 ?>
