<?php
require_once('config.php');
$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
if ($connect->connect_errno) {
   echo ("Failed to connect to MySQL:" . $connect->connect_error);
   exit();
}
