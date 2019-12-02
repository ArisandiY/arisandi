<?php 
require_once 'connect.php';

$golongan = $_POST['golongan'];
$daya = $_POST['daya'];
$tarif = $_POST['tarif'];
$beban = $_POST['beban'];

mysqli_query($connect, "INSERT INTO tb_tarif VALUES('','$golongan','$daya','$tarif','$beban')");
 
header("location:data_tarif.php?pesan=input");
?>