<?php
session_start();
require_once 'connect.php';


$password = $_POST['password'];
$login = $_POST['login'];
$password = md5('qwerty' . $password);


$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE  `login` = '$login' AND `pass` = '$password' ");
if (mysqli_num_rows($check_user)) {
   $user = mysqli_fetch_assoc($check_user);
   $_SESSION['user'] = [
      'id' => $user['id'],
      'name' => $user['name'],
      'email' => $user['email'],
      'login' => $user['login'],
      'avatar' => $user['avatar']
   ];
   header('../profile.php');
} else $_SESSION['message'] = "No such user found";
header('Location: ../profile.php');
