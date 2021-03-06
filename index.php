<?php
session_start();
if(isset($_SESSION['id']))
{
header('location: instructions.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/Homepage.css" rel="stylesheet">
    <style type="text/css">
        .jumbotron{
            margin-top: 8rem;
        }
    </style>
</head>

<body class="fixed-sn animated fadeIn">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark elegant-color">
            <a href="http://jssmmil.in/" class="navbar-brand" title="MMIL Website"><img src="assets/img/logo.png">
                <p id="head">MMIL</p>
            </a>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="fa fa-home"></i>
                        <span class="clearfix d-none d-sm-inline-block">Home</span>
                    </a>
                </li> 
                <li class="nav-item">
                    <a href="admin.php" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="clearfix d-none d-sm-inline-block">Admin</span>
                    </a>
                </li>    
            </ul>
    </header>
    <main class="container animated fadeIn">
      <div class="row">
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
           <div class="jumbotron">        
              <h1 class="h1-responsive" align="center">MCQ TEST</h1>
              <hr>
              <div class="button-group">
                <a href="login.php"><button type="button" class="btn btn-grey">Log In</button></a>
                <a href="signup.php"><button type="button" class="btn btn-grey">Sign Up</button></a>
              </div>
              <p id="instruction" align="center">LogIn/SignUp before starting the test.</p>
           </div>
        </div>
      </div>
    </main>
    <footer class="page-footer elegant-color center-on-small-only">
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2018 Copyright:
                <a href="http://jssmmil.in/"> Microsoft Mobile Innovation Labs</a>

            </div>
        </div>
    </footer>

    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
</body>

</html>