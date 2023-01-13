<?php
$connect = mysqli_connect("lesson.by", "root", "", "MyPHP_MySql");
if ($connect->connect_errno) {
   echo ("Failed to connect to MySQL:" . $connect->connect_error);
   exit();
}
