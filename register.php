<!DOCTYPE html>
<html lang="en">
 <head>
    <!-- REQUIRED META TAGS -->
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

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
  <div class="registerform">
     <h2 class="text-center text-dark pt-1"> <span class ="fa fa-user-circle"></span>Sign up here</h2>
     <div class="row justify-content-center">
       <div class="card w-50 " style=>
          <div class="container ">
            <form action="" method="post" class="form-group">
               <div class="form-group">
                 <label for="username" class="text-info">Name:</label> 
                 <input type="text" name="username" placeholder=" enter your name" id="" class="form-control"required>
               </div> 
               <div class="form-group"> 
                 <label for="email" class="text-info">Email:</label> 
                 <input type="email" name="useremail" placeholder=" enter your email" id="" class="form-control" required>
               </div>
               <div class="form-group">
                 <label for="phone number" class="text-info">phone no:</label> 
                 <input type="tel" name="userphoneno" placeholder=" enter your phone number" id="" class="form-control" required>
               </div>
               <div class="form-group">
                 <label for="password" class="text-info">password:</label> 
                 <input type="password" name="password" placeholder="enter password"  id="" class="form-control" required>
               </div>
              
                 <input type="submit" name="submit_btn" id="register" class="btn btn-dark btn-md" value="sign up">
                 <div id="register-link" class="text-right ml-2 p-1">
                  Already have an account?<a href="login.php" class="text-warning">Sign in<span>&#128100;</span></a>
                 </div> 
           </form>
    
          </div>
        </div>
    </div>
  </div>
  <?php
        include("config.php");
         if(isset($_POST["submit_btn"])) 
          {
            $name = $_POST["username"];
            $email = $_POST["useremail"];
            $phoneno = $_POST["userphoneno"];
            $password = $_POST["password"];

            $sql= "INSERT INTO `register_data`(`sno`, `name`, `email`, `phone no`, `password`) VALUES (Null,'$name','$email','$phoneno','$password')";
            if(mysqli_query($con,$sql))
            {
              
               header("location:index.php");
            }
            else
            {
               echo"fail";
            } 
         }
      ?>
   
 </body>
 </html>
