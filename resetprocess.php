<?php
require_once("connection.php");
if (isset($_POST['exp'])) {
  $exp=$_POST["exp"];
  session_start();
  $username=$_SESSION['uname'];
  $uin=$_SESSION['seq'];
  $sqr="UPDATE login SET uin='$uin',expression='$exp' WHERE user_name='$username'";
  $query1=mysqli_query($con,$sqr);
if ($query1) {
  echo "Success";
} else {
  echo "failed";
}

}
  ?>
