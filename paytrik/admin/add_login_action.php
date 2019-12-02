<?php 
require_once 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$namalengkap = $_POST['namalengkap'];
$level = $_POST['level'];

mysqli_query($connect, "INSERT INTO tb_login VALUES('','$username','$password','$namalengkap','$level')");
 
header("location:data_login.php?pesan=input");
?>