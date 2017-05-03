<?php
require_once("connection.php");
if (isset($_POST['exp'])) {
  $exp=$_POST["exp"];
  session_start();
  $username=$_SESSION['uname'];
#$query = mysqli_query($con,"SELECT * FROM login WHERE username='$username'");

$sq=$_SESSION['seq'];
$un=$_SESSION['uname'];
$sqr="INSERT INTO login(expression,status,uin,user_id,user_name) VALUES('$exp',false,'$sq','','$un')";
$query1=mysqli_query($con,$sqr);
# get the user_id pass in the insert query of registeration
#set user_id session
$user_id = mysqli_insert_id($con);
$fname=$_SESSION['f_name'];
$address=$_SESSION['address'];
$dob=$_SESSION['dob'];
$email=$_SESSION['email'];
$gender=$_SESSION['gender'];
$jdate=$_SESSION['join_date'];
$lname=$_SESSION['l_name'];
$phone=$_SESSION['phone'];
$sqr1="INSERT INTO registeration(address,dob,email,f_name,gender,join_date,l_name,phone,r_id,user_id) VALUES('$address','$dob','$email','$fname','$gender','$jdate','$lname','$phone','',$user_id)";
$query2=mysqli_query($con,$sqr1);
$_SESSION['user_id']=$user_id;



$count=$_SESSION['count'];
$user=$_SESSION['user_id'];
for($i=0;$i<=$count;$i++)
{
$qq=$_SESSION['qst'][$i];
$aa=$_SESSION['ans'][$i];
$sqr="INSERT INTO sqst(ans,qst,q_id,user_id) VALUES('$aa','$qq','',$user)";
$query1=mysqli_query($con,$sqr);
}
}
else
{
  echo "Error";
}
?>
