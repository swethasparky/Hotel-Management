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

    <title>contact us </title>

    <!-- BOOTSTRAPS CSS -->
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
    <link rel="stylesheet" href="style.css" type="text/css">

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

    <!-- Grid row -->

    <div class="row">
        <h1 style="text-align:center"> <P>&#128081;</P>welcome to our Majestic hotel</h1>
        <marquee width="60%" direction="left" height="100px">Spacious accomodation friendly service,and a paradise-like
            setting awaits you at our Majestic Hotel
        </marquee>
    </div>

    <!-- GALLARY IMAGE -->

    <div class="gallery" id="gallery">
        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="./images/pic1.jpg" alt="card image cap">
        </div>
        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="./images/room1.jpg" alt="card image cap">
        </div>

        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="./images/premium.jpg" alt="card image cap">
        </div>
        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="./images/food 1.jpg" alt="card image cap">
        </div>
        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="./images/luxuary.jpg" alt="card image cap">
        </div>
        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="./images/food 2.jpg" alt="card image cap">
        </div>
        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="./images/room2.jpg" alt="card image cap">
        </div>
        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="./images/food 3.jpg" alt="card image cap">
        </div>
        <div class="mb-3 pics animation all 2">
            <img class="img-fluid" src="./images/restaurant.jpg" alt="card image cap">
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