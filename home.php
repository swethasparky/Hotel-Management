<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(isset($_SESSION['name']))
    {
    
    }
    else
     {
        header("location:login.php");
        
    }
?>

<head>

    <!-- REQUIRED META TAGS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel web design</title>

    <!-- BOOTSTRAPS CSS  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 

    <!-- OPTIONAL JAVASCRIPT -->
    <!-- JQUERY FIRST,THEN POPPER.JS,THEN BOOTSTRAP JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <link rel="stylesheet" href="style.css"  type="text/css">
</head>

<!-- NAVBAR -->

<body>
    <div class=" navbar navbar-expand-md navbar-light " id="navbar">
        <a href="#" class="navbar-brand">
            <img src="./images/logo.png" class="" alt="">
        </a>
        
        <button type="button" class="navbar-toggler" data-toggle='collapse' data-target="#navbarcon">
            <span class="navbar-toggler-icon "></span>
        </button>
       

        <div id="navbarcon" class="navbar-collapse collapse">
       

         <ul class="navbar-nav ml-auto text-right">
                <li class="nav-item"><a href="home.php" class="text-secondary nav-link active"><span
                            class="fa fa-home"></span>
                        Home</a></li>
                <li class="nav-item"><a href="book now.php" class=" text-secondary nav-link"><span
                            class="fa fa-window-restore"></span> Book Now</a></li>
                <li class="nav-item"><a href="rooms_rate.php" class=" text-secondary nav-link"><span
                            class="fa fa-window-restore"></span>Rooms&Rates</a></li>
                <li class="nav-item"><a href="gallery.php" class=" text-secondary nav-link"><span
                            class="fa fa-folder-open"></span> Gallery</a></li>
                <li class="nav-item"><a href="contact us.php" class=" text-secondary nav-link"><span
                            class="fa fa-phone-square"></span> contact us</a></li>
                            <div class="dropdown">
              <button class="btn dropdown-toggle " type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="fa fa-user-circle"></span><?php echo $_SESSION['name'];?></button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="Logout.php"><span class = "fa fa-power-off"></span>Logout</a></i></b>
              
              </div>
              </div>
                          
            </ul>
                            
        </div>
    </div>
    
 
    <!-- CAROUSEL -->

    <div id="Fade1" class="carousel slide " data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item slide1 active">
                <img src="./images/img1.png" alt="img">
            </div>
            <div class="carousel-item slide2 ">
                <img src="./images/room2.jpg" alt="">
            </div>
            <div class="carousel-item slide3 ">
                <img src="./images/restaurant.jpg" alt="">
            </div>

        </div>
        <a class="carousel-control-prev" href="#Fade1" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#Fade1" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- SOCIAL MEDIA ICONS -->

    <div class="icons">
        <ul>
            <li><i class="fab fa-facebook-f"></i></li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-twitter"></i></li>
            <li><i class="fab fa-whatsapp"></i></li>
            <li><i class="fab fa-youtube"></i></li>
        </ul>
    </div>


    <!--SERVICE BOX  -->

    <div class="container-fluid bg-secondary ">
        <div class="">
            <div class="col p-5 ">
                <h3 class="text-info text-center">About us</h3>
                <p class="text-light ">A luxury real-estate developer,owner and operator,with a growing portfolio of
                    high-end assets in prime location.we offer exceptional properties,customized experiences and
                    unmatched hospitality services to the world's most discerning guests.
                </p>

            </div>

        </div>
    </div>

    <!-- FOOTER -->

    <div class="container-fluid mt-3 p-5 bg-dark">
        <div class="row">
            <div class="col">
                <p class="text-white">Copyrights &copy;allrights are reserved 2020</p>
            </div>
        </div>
    </div>
</body>
</html>
