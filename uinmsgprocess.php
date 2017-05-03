<?php
require_once("connection.php");
$a=array();
if (isset($_POST['uin'])) {
$a['msgstatus']=true;
$a['uin']=$_POST['uin'];

} else {
  $a['msgstatus']=false;
  $a['uin']="";

}

echo json_encode($a);

 ?>
