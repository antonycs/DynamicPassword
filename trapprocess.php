<?php
require_once("connection.php");

session_start();
if(isset($_POST['uname'])&& isset($_POST['user_id']))
{
$_SESSION['uname']=$_POST['uname'];
$_SESSION['user_id']=$_POST['user_id'];
echo "ok";
}
?>
