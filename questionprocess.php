<?php
require_once("connection.php");
if ((isset($_POST['qst']))&&(isset($_POST['ans']))) {
  session_start();
  if (isset($_SESSION['count'])) {
    if ($_SESSION['count']<=1) {

      $w=$_SESSION['count'];
        $_SESSION['count']=$w+1;
      $i=$_SESSION['count'];
      $_SESSION['qst'][$i]=$_POST['qst'];
      $_SESSION['ans'][$i]=$_POST['ans'];
      if ($_SESSION['count']<=1){
        $a = "Success, add one more ?";
      }else {
$a = "Limit reached!, Register now.";
      }


    } else {
      $a = "Limit reached!, Register now.";
    }
  } else {
    $_SESSION['count']=0;
    $i=$_SESSION['count'];
    $_SESSION['qst'][$i]=$_POST['qst'];
    $_SESSION['ans'][$i]=$_POST['ans'];
    $a = "Success, add two more ?s";
  }
} else {
  $a = "Something went wrong!";
}

echo $a;
 ?>
