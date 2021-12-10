<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Final Project</title>

    <!--BOOTSTRAP LINKS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery.min.js"></script>


    <!--CSS LINKS-->
    <link rel = "stylesheet" href = "style.css"  type="text/css">
</head>

<body>

<nav class="navbar navbar-inverse fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:pink;">LAJU'S SALON</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="active"><a href="#">About Us</a></li> <!--system functionalities-->
      <li class="active"><a href="#footer">Contact Us</a></li>
    </ul>

    <!--SIGN IN/UP SHEET-->
    <ul class="nav navbar-nav navbar-right">
      <li><a href="sign-up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login-page"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="admin.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
      </ul>
  </div>
</nav>


<section id="home_body"><!--bg image is not working-->
  <h1 class="text-center">
  WELCOME TO LAJU'S SALON! <br>
  Beauty appointments made EASY!
</h1>
<div class="text-cent">
<a href="login-page.php"> <strong>CLICK HERE TO GET STARTED! </strong> </a>
</div>

</section>

<section id="about-us">
</section>
</body>



<!-- FOOTER -->
<footer class="page-footer custom font-small blue pt-4" >
 
<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">
  <!-- Grid row -->
  <div class="row">
    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">
      <!-- Content -->
      <h5 class="text-uppercase"> <strong>LAJU'S SALON</strong></h5>
      <p>Use this website to see our empty slots & book an appointment for this week.</p>
    </div>
    <!-- Grid column -->

    <hr class="clearfix w-100 d-md-none pb-3">
    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- CONTACT US -->
      <h5 class="text-uppercase"> <strong>Contact Us </strong></h5>
      <ul class="list-unstyled">
        <li>
          <span>Phone no.: <a href="#" name="footer">+233 1234 123</a></span>
        </li>
        <li>
          <span>Email: <a href="#">Ofeoritselaju.oyan@ashesi.edu.gh</a>
        </li>
        
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase"> <strong>MAKE AN APPOINTMENT</strong></h5>

      <ul class="list-unstyled">
        <li><a class="btn  btn-floating m-1 " href="sign-up.html"> <span class="glyphicon glyphicon-user"></span>Sign
              Up</a></li><br>
          <li><a class="btn btn-floating btn-lg text-dark" href="login-page.html"><span
                class="glyphicon glyphicon-log-in"></span> Login</a></li>
        
      </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->
</div>
<!-- Footer Links -->
<!-- Copyright -->
<div class="footer-copyright text-cent py-3">© 2021 Copyright:
  Laju's Salon
</div>

</footer>



</html>