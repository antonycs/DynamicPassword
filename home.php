<?php
require_once("connection.php");
session_start();
if(!isset($_SESSION['user_id'])){
  header("location:index.html");
}
$u = $_SESSION['user_id'];
$q = mysqli_query($con,"SELECT * FROM registeration WHERE user_id=$u");
if(mysqli_num_rows($q)>0){
  $values = mysqli_fetch_assoc($q);
}
 ?>
<html lang="en">
<head>

  <title>DP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 {
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 {
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 {
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 {
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">D-password</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><?php echo $_SESSION['uname']; ?> </a></li>
        <li><a href="#"></a></li>
        <li><a href="/" id="logout_link" >Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">Welcome</h3>

  <h1><?php echo $values['f_name']; ?> <?php echo $values['l_name']; ?></h1>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">About</h3>
  <p>Your heart is just a beatbox for the song of your life.
    life is a song,sing it!.
  </p>

</div>


<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p><?php echo $values['email']; ?></p>
</footer>
<script>
$("#logout_link").click(function(e) {
  e.preventDefault();
$.post("terminateprocess.php", {
  "ter":"minate"
}).done(function(data) {
  window.location = "index.html";
});
});
</script>
</body>
</html>
