<?php

require_once("connection.php");
if (isset($_POST['ter'])) {
    session_start();
  // remove all session variables
session_unset();

// destroy the session
session_destroy();
echo "bye";
}



 ?>
