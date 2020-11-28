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
    <title>rooms and rate</title>

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
              <a class="dropdown-item" href="Logout.php"><span class = "fa fa-power-off"></span>Logout</a>
                           
              
              </div>
              </div>
            </ul>
           </div>                 
        </div>
    </div>   
    <div class="containerr">
    <div class="row"style="background-color: black;">
    <?php
        include("config.php");
        $select_image = "SELECT * FROM `fileupload`";
        $result_image = mysqli_query($con,$select_image);
        while($fetch_image = mysqli_fetch_assoc($result_image))
        {
            $image_name_f = $fetch_image["name"];
            $roomname_f = $fetch_image["roomname"];
            $roomrate_f = $fetch_image["roomrate"];
           
        ?>
      <div class="card-deck pr-5 ">
        <div class="card"style="width: 19rem; ">
          <img class="card-img-top1" src="imagedoc/<?php echo $image_name_f; ?>" alt="card image top" class="img.fluid">  
            <div class="card-body"><h2 class="card-title float-right"><?php echo $roomname_f; ?></h2>
                <span class="fa fa-star checked"></span><span class="fa fa-star checked "></span><span class="fa fa-star checked "></span><span class="fa fa-star checked "></span><span class="fa fa-star-half checked  "></span>

                 <h3 class="card-text text-danger pt-5">$<?php echo $roomrate_f; ?></h3>
            </div>
               <div class="row">
                  <div class="col">
                    <button class="btn btn-success float-right">Book Now</button>
                  </div>
               </div>
         </div>
       </div>
      
        <?php          
       }
      ?>
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