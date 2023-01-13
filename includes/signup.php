<?php
session_start();
require_once 'connect.php';

$name = $_POST['user_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$check_name = mysqli_query($connect, "SELECT * FROM `users` WHERE `name` = '$name'");
$check_login = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
$check_email = mysqli_query($connect, "SELECT * FROM `users` WHERE `email` = '$email'");
if (mysqli_num_rows($check_name) > 0) {
   $_SESSION['message'] = 'This name is already registered!';
   header('Location: ../registr_form.php');
   exit;
}
if (mysqli_num_rows($check_login) > 0) {
   $_SESSION['message'] = 'This login is already registered!';
   header('Location: ../registr_form.php');
   exit;
}
if (mysqli_num_rows($check_email) > 0) {
   $_SESSION['message'] = 'This email is already registered!';
   header('Location: ../registr_form.php');
   exit;
}

if ($password !== $confirm_password) {
   $_SESSION['message'] = 'Passwords don\'t match!';
   header('Location: ../registr_form.php');
}




$password = md5('qwerty' . $password);
$path = 'uploads/' . time() . $_FILES['avatar']['name'];
move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path);
if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
   $_SESSION['message'] = 'unable to upload your file';
}
mysqli_query($connect, "INSERT INTO `users`(`name`, `pass`, `email`, `login`, `avatar`) VALUES ('$name','$password','$email','$login', '$path')");
if (mysqli_query($connect, "INSERT INTO `users`(`name`, `pass`, `email`, `login`, `avatar`) VALUES ('$name','$password','$email','$login', '$path')")) {
   $_SESSION['message'] = 'registration completed successfully';
}

header('Location: ../index.php');
