<?php
require_once("connection.php");
if (isset($_POST['seq'])) {
session_start();
$_SESSION['seq']=$_POST['seq'];

} else {

}


 ?>
