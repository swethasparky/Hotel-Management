<!DOCTYPE html>
<html>
<?php 
session_start();
?>
<head>
  
 <!-- REQUIRED META TAGS -->
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fileupload</title>

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


    
</style>

<body>
   <div class=loginform>
     <h2 class="text-center text-light pt-5 ">Fill the form</h2>
     <div class="row justify-content-center">
       <div class="card">
       <div class="container p-5 mr-5">
           <form action="" method="post" enctype="multipart/form-data" class="form">
            <div class="form-group">
            <label for="" class="text-info">Name:</label> 
            <input type="text" name="room_name" placeholder="enter product name"  id="" class="form-control" required>

            <label for="" class="text-info">Price:</label> 
            <input type="text" name="room_rate" placeholder="enter product rate"  id="" class="form-control" >


                 <label for="" class="text-info">File</label> 
                 <input type="file" name="image" id="" class="form-control" required >
   
      
                 <input type="submit" name="submit_upload" id="" class="btn btn-dark btn-md-3" value="upload">
             </form>
             </div>
         </div>
      </div>   
     </div>
    </div>
    <?php
         include("config.php");
         if(isset($_POST["submit_upload"]))
      {
         $upload = "imagedoc/";
         $roomname = $_POST["room_name"];
         $roomrate = $_POST["room_rate"];
         $image = $_FILES["image"]["name"];
         $image_tmp = $_FILES["image"]["tmp_name"];
           

         if(move_uploaded_file($image_tmp,$upload.$image))
         {
           $sql_insert= "INSERT INTO `fileupload`(`id`, `name`, `roomname`, `roomrate`) VALUES (Null,'$image','$roomname','$roomrate')";
           if(mysqli_query($con,$sql_insert))
           {
              echo"success";
           }
           else
           {
             echo"insertfail";
           }
         }
         else
           {
              echo"fail";

           }
     }
   ?>
   

    </div>
    </div>
</body>
</html>
  
