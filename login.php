<!DOCTYPE html>
<html>
<?php 
session_start();
?>
<head>
  
 <!-- REQUIRED META TAGS -->
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

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
  <div class="loginform">
     <h2 class="text-center text-light p-3"> <span class ="fa fa-user-circle"></span>Sign In</h2>
     <div class="row justify-content-center">
       <div class="card ">
         <div class="container  p-5 mr-5">
           <form action="" method="post" class="form">
              <div class="form-group">
                 <label for="useremail" class="text-info">useremail:</label> 
                 <input type="email" name="useremail" placeholder=" enter your email" id="" class="form-control" >
              </div>
              <div class="form-group">
                 <label for="password" class="text-info">password:</label> 
                 <input type="password" name="password" placeholder="enter password"  id="" class="form-control" required>
              </div>
              <div class="form-group">
                 <input type="submit" name="login_btn" id="" class="btn btn-dark btn-md" value="Login">
              </div>
              <div id="register-link" class="text-right ml-2 p-1">
                 Don't have an account?<a href="register.php" class="text-primary">Sign up<span>&#128100;</span></a>
              </div>
           </form>
         </div>
      </div>
     </div>
    </div>
    </div>

    <?php
         include("config.php");
        if(isset($_POST["login_btn"]))
        {
           $email =$_POST["useremail"];
           $password =$_POST["password"];

           $sql_index = "SELECT name FROM `register_data` WHERE `email`='$email' and `password`='$password'";
           $result_index = mysqli_query($con,$sql_index);
           
           if (mysqli_num_rows($result_index) > 0)
           {
              while ($row = mysqli_fetch_array($result_index)){
                 $name = $row['name'];
                 $_SESSION['name'] = $name;
                 header("location:home.php");
              }
             
           }
         
           else
           {
              echo"fail";
           }
         }
         
      
      ?>
</body>
</html>