<?php 
session_start();

if (isset($_SESSION['ses_username']) === false) {
    header("Location: index.php?logfirst");
}
elseif (isset($_REQUEST['logout'])===true) {
    session_destroy();
    header("Location: index.php?logout ");
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
                        <li class="nav-item"><a class="nav-link" href="?logout">Log out</a></li>
                        <li class="nav-item"><a class="nav-link" href="buynow.php">Buy Now</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">!WANTED!</h1>
                    <p style="font-size: 250%;">DEAD OR ALIVE</p>
                    <div class="Player">
                        <img class="profile" src="assets/img/06.jpg">
                    </div>
                    <h2 class="masthead-subheading mb-0"><?php echo $_SESSION['ses_username'];  ?></h2>
                    <p style="font-size: 200%">Baptismal name is UNKOWN at this time, but he is WANTED FOR MURDER, ROBBERY, FRAUD, ASSULT and THEFT</p>
                    <p style="font-size: 150%">Current Reward is $$$$$$</p>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Play Now</a>

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
