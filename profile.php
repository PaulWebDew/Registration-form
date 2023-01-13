<?php
session_start();
if (!$_SESSION['user']) header('Location: ./index.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <link rel="stylesheet" href="custom.css">
   <title>Signin Form</title>
</head>

<body>
   <div class="row mt-5">
      <div class="col-lg-5 col-sm-7 col-10 mx-auto ">
         <div class="container-lg bg-info p-2 rounded-3 wrForm ">
            <form action="./includes/logout.php" method="post" name="signin-form">
               <fieldset>
                  <legend class="text-light  fw-bold text-center text-decoration-underline ">User's data</legend>
                  <div class="my-3 text-center">
                     <img src="<?= $_SESSION['user']['avatar'] ?>" alt="user's avatar">
                  </div>
                  <div class="my-3 text-center">
                     <h1><?= $_SESSION['user']['login'] ?></h1>
                  </div>
                  <div class="my-3 text-center">
                     <h2><?= $_SESSION['user']['name'] ?></h2>
                  </div>
                  <div class="my-3 text-center">
                     <h3><?= $_SESSION['user']['email'] ?></h3>
                  </div>

               </fieldset>
               <div class="d-flex justify-content-end row mx-auto"><button input class="btn btn-primary col-sm-3 col-12" type="submit" value="register" name="register">Exit</button></div>
            </form>

         </div>
      </div>
      <div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>