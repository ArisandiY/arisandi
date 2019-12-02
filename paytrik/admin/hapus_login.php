<?php 
require_once 'connect.php';
$kodelogin = $_GET['kodelogin'];
mysqli_query($connect, "DELETE FROM tb_login WHERE kodelogin='$kodelogin'")or die(mysqli_error());
 
header("location:data_login.php?pesan=hapus");
?>