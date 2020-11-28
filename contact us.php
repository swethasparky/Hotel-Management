<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(isset($_SESSION['name']))
    {
    
    }
    else
     {
        header("location:index.php");
        
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
                            class="fa fa-home"></span> Home</a></li>
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

    <!-- CONTACT US -->

    <section class="contact">
        <div class="content">
            <h1>contact us</h1>
            <p>As our precious guests always deserve the best,our relentless pursuit for perfection never end.</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h2> Address</h2>
                        <p>4671 sugar camp Road,<br>owatonna,minnesto,<br>66050</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h2>phone</h2>
                        <p>507-476-6094</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h2>Email</h2>
                        <p>majestyhotel@gmail.com</p>
                    </div>
                </div>
            </div>

            <!--CONTACT US  FORM -->

            <div class=" contactForm">
            <form action="" method="post">
                <form>
                    <h2>send message</h2>
                    <div class="inputbox">
                        <input type="text" name="username" required="required">
                        <span>Full name</span>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="useremail" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputbox">
                        <textarea required=" required"  name="usermessage"></textarea>
                        <span> Type your message....</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="send_btn" value="send">

                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FOOTER -->

    <div class="container-fluid mt-3 p-5 bg-dark">
        <div class="row">
            <div class="col">
                <p class="text-white">Copyrights &copy;allrights are reserved 2020</p>
            </div>
        </div>
    </div>
    <?php
        include("config.php");
         if(isset($_POST["send_btn"])) 
          {
            $name = $_POST["username"];
            $email = $_POST["useremail"];
            $urmessage= $_POST["usermessage"];


            $sql= "INSERT INTO `contactus_data`(`sno`, `name`, `email`, `urmessage`) VALUES (Null,'$name','$email','$urmessage')";
            if(mysqli_query($con,$sql))
            {
               echo "Thankyou";
            }
            else
            {
               echo"fail";
            } 
         }
      ?>
</body>

</html>