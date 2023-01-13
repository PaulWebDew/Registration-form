<?php
session_start();
if (isset($_SESSION['user'])) header('Location: ./profile.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="custom.css">
   <title>Registration Form</title>
</head>

<body>
   <div class="row mt-5">
      <div class="col-lg-5 col-sm-7 col-10 mx-auto ">
         <div class="container-lg bg-info p-2 rounded-3 wrForm ">
            <form action="./includes/signup.php" method="post" name="signup-form" enctype="multipart/form-data">
               <fieldset>
                  <legend class="text-light  fw-bold text-center text-decoration-underline ">User registartion</legend>
                  <div class="my-3">
                     <label for="user_name" class="form-label">User name</label>
                     <input type="text" id="user_name" class="form-control" name="user_name" placeholder="Enter your name" pattern=".{4,25}" title="from four to twenty five characters" required>
                  </div>
                  <div class="my-3">
                     <label for="login" class="form-label">User login</label>
                     <input type="text" id="login" class="form-control" name="login" placeholder="Enter your login" pattern=".{4,25}" title="from four to twenty five characters" required>
                  </div>
                  <div class="my-3">
                     <label for="email" class="form-label">Email</label>
                     <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="*****@*****.**" required>
                  </div>
                  <div class="my-3">
                     <label for="avatar" class="form-label">Avatar</label>
                     <input type="file" name="avatar" id="avatar" class="form-control">
                  </div>
                  <div class="my-3">
                     <label for="pass" class="form-label">Password</label>
                     <input type="password" id="pass" class="form-control" name="password" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                  </div>
                  <div class="my-3">
                     <label for="confirm_pass" class="form-label">Confirm password</label>
                     <input type="password" id="confirm_pass" class="form-control" name="confirm_password" placeholder="Confirm your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                     <?php
                     if (isset($_SESSION['message'])) {
                        echo '<div class="form-text text-center text-danger fw-bolder">' . $_SESSION['message'] . '</div>';
                     };
                     unset($_SESSION['message']);
                     ?>
                  </div>
                  <div class="d-flex justify-content-end row mx-auto"><button input class="btn btn-primary col-sm-3 col-12" type="submit" value="register" name="register">Register</button></div>
               </fieldset>
            </form>
            <p class="text-center mt-3">have an account? <a href="index.php">Login</a></p>
         </div>
      </div>
      <div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>