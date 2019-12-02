<?php 
require_once 'connect.php';

$kodetagihan = $_POST['kodetagihan'];
$tglbayar = date("Y-m-d");
$status = 	$_POST['statusp'];
$img = $_FILES['buktipembayaran'];
$imgname = $img['name'];
$tmpname = $img['tmp_name'];

$target = "C:\\xampp\\htdocs\\paytrik\\admin\\buktiimg\\";

move_uploaded_file($tmpname, $target.$imgname);

mysqli_query($connect, "INSERT INTO tb_pembayaran VALUES('','$kodetagihan','$tglbayar','$imgname','$status')");	
 
header("location:data_pembayaran.php?pesan=input");
?>