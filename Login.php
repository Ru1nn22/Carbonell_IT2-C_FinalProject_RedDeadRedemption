<?php 
session_start();

$acc_username = "123";
$acc_password = "123";
$acc_email = "crbnll12200@gmail.com";

$url_add = "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

if(isset($_REQUEST['login_button']) == true){
    if($_REQUEST['form_username'] != $acc_username){
    header("Location: ".$url_add."?notexist");
}
    elseif ($_REQUEST['form_username'] == $acc_username && $_REQUEST['form_password'] != $acc_password){
    header("Location: ".$url_add."?wrongpass");
  } 
  elseif ($_REQUEST['form_username'] == $acc_username && $_REQUEST['form_password'] == $acc_password){
    header("Location: ".$url_add."?success");
  }
$_SESSION['ses_username'] = $acc_username;
$_SESSION['ses_password'] = $acc_password;
$_SESSION['ses_email'] = $acc_email;
}
?>

<!DOCTYPE html>
<html lang="en">

    <!-- header -->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Red Dead Redemption Online</title>
        <link rel="icon" type="image/x-icon" href="assets/sadie.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>


    <!-- Body -->

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
            <div class="container px-5">
                <div class="navbar-logo"><a href="#page-top"><img class="img-fluid rounded-circle" src="assets/sadie.png">
                </div>
                <a class="navbar-brand" href="#page-top" >Red Dead Redemption Online</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="news.php">News</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                        <li class="nav-item"><a class="nav-link" href="Login.php">Log In</a></li>
                        <li class="nav-item"><a class="nav-link" href="buynow.php">Buy Now</a></li>         
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">Log In</h1>
                    <!-- Login up form -->

                    <form class="login-form" >
                        <div class="form-group"> 
                        <?php

                        if(isset($_REQUEST['notexist'])=== true){

                        echo "<div class='alert alert-danger' role='alert'> Username does not exist. </br> </div>";
                        }
                        elseif (isset($_REQUEST['wrongpass'])=== true){

                        echo "<div class='alert alert-warning' role='alert'>  Incorrect Password. </div>";
                        }
                        elseif (isset($_REQUEST['success']) === true){
                        echo "<div class='alert alert-success' role='alert'>  Redirecting. </div>";
                        header("Refresh: 5 url=profile.php");  
                        }
                        elseif (isset($_REQUEST['logfirst']) === true ){
                        echo "<div class='alert alert-warning' role='alert'>  Please login first. </div>";
                        }
                         
                        ?> 

                         <input type="text" class="form-control rounded-left" placeholder="Username or E-email" name="form_username" required>
                        </div>
                     <div class="form-group d-flex">
                        <input type="password" class="form-control rounded-left" placeholder="Password" name="form_password"required>
                     </div>
                     <div class="form-group d-flex">
                        <div class="w-50">
                        <label class="checkbox-wrap checkbox-primary">
                                      <input type="checkbox" checked>Remember me?<span class="checkmark"></span>
                                </label>
                                </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary rounded submit p-3 px-5" name="login_button">Login</button>
                </div>
                <div class="form-group d-md-flex">
                                    <a href="#">Forgot Password?</a>
                        </div>
                </form>

                </br>
                </div>
            </div>
        </header>
    
    </br>
    </br>
    </br>
    </br>
    </br>


        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="Footer-esrb"><a href="https://www.esrb.org/"><img class="img-fluid" src="assets/img/esrb.png"></a></div> </br>
            <div class="container px-5"><p class="m-0 text-center text-white small"><a href="https://www.copyright.gov/"> Copyright &copy; RED DEAD REDEMPTION ONLINE 2022</a> </p></div>
        </footer>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
