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

    <!--CONTAINERS  -->

    <div class="containers">
        <div class="containers-time">
            <h2 class="heading text-white">Time open</h2>
            <h3 class="heading-days ">Monday-Friday</h3>
            <p style="background-color: antiquewhite;">7am - 11am (breakfast)</p>
            <p style="background-color: antiquewhite;">11am - 10pm (lunch/dinner)</p>

            <h3 class="heading-days ">Saturday and sunday</h3>
            <p style="background-color: antiquewhite;"> 9am - 1pm (breakfast)</p>
            <p style="background-color: antiquewhite;">1pm - 10pm (lunch/dinner)</p>

            <hr>
            <h4 class="heading-phone">call us: (123) 56-12-218</h4>
        </div>

        <!-- ONLINE RESERVATION FORM -->

        <div class="containers-form">
            <form action="" method="post">
                <h2 class=" heading "> Online Reservation</h2>

                <div class="form-field">
                    <p>Name</p>
                    <input type="name"  name="username" placeholder="your name">
                </div>
                <div class="form-field">
                    <p>contact no</p>
                    <input type="contact no" name="usercontact" placeholder="your contact no">

                </div>

                <div class="form-field">
                    <p>Email</p>
                    <input type="email" name="useremail" placeholder="your email" required>

                </div>

                <div class="form-field">
                    <p> From Date</p>
                    <input type="date" name="date1">
                </div>
                <div class="form-field">
                    <p> To Date</p>
                    <input type="date" name="date2">
                </div>
                <div class="form-field">
                    <p>How many people?</p>
                    <select name="select1" id="#">
                        <option value="1">1 person</option>
                        <option value="2">2 person</option>
                        <option value="3">3 person</option>
                        <option value="4">4 person</option>
                        <option value="5">5 person</option>
                        <option value="5+">5+ person</option>
                    </select>
                </div>

                <div class="form-field">
                    <p>Rooms</p>
                    <select name="select2" id="#">
                        <option value="AC">Ac</option>
                        <option value="Non-Ac">Non-Ac</option>
                        <option value="Deluxe">Deluxe</option>
                        <option value="superior">Superior</option>
                    </select>
                </div>

                <!-- BUTTON -->

                <button name="sub_btn" class="btn">submit</button>
            </form>
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
    <?php
        include("config.php");
         if(isset($_POST["sub_btn"])) 
          {
            $name = $_POST["username"];
            $contactno =$_POST["usercontact"];
            $email =$_POST["useremail"];
            $fromdate = $_POST["date1"];
            $todate = $_POST["date2"];
            $howmanypeople = $_POST["select1"];
            $rooms = $_POST["select2"];

            $sql_1= "INSERT INTO `booking_form`(`sno`, `name`, `contactno`,`email`, `fromdate`, `todate`,`howmanypeople`,`rooms`) VALUES (Null,'$name','$contactno','$email','$fromdate','$todate','$howmanypeople','$rooms')";
            if(mysqli_query($con,$sql_1))
            {
               echo"THANKYOU FOR BOOKING";
            }
            else
            {
               echo"fail";
            } 
         }
      ?>

</body>

</html>