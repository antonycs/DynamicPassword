<?php
require_once("connection.php");

//Receive username and password
if(isset($_POST['uname']) && isset($_POST['pass'])){
    $username = $_POST['uname'];
  //  $password = $_POST['password'];
    $a = array();
     session_start();

    $query = mysqli_query($con,"SELECT * FROM login WHERE user_name='$username'");
    if($query){
        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_array($query);
           $jsonData = $row;
            $a['statuslogin'] = true;
           $a['responnse'] = $jsonData;
        //  $a['responnse']="success!";
          $a['password']=$_POST['pass'];
          $a['time']=$_POST['time'];
        //  $_SESSION['user_id'] = $row['user_id'];
            //$_SESSION['email'] = $row['email'];
        }else{
            $a['statuslogin'] = false;
            $a['responnse1'] = "No user found";
        }
    }else{
        $a['statuslogin'] = false;
        $a['responnse1'] = "No user found";
    }
}else{
    $a['statuslogin'] = false;
    $a['responnse1'] = "No input found";
}
echo json_encode($a);
?>
