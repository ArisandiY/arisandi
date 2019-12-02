<?php 
require_once 'connect.php';
$kodepelanggan  = $_POST['kodepelanggan'];
$pemakaianakhir = $_POST['pemakaianakhir'];
$tglpencatatan = $_POST['tglpencatatan'];
$totalbayar = $_POST['totalbayar'];
$status = $_POST['status'];
$ketetangan = $_POST['keterangan'];


mysqli_query($connect, "INSERT INTO tb_tagihan VALUES('','$kodepelanggan','$pemakaianakhir','$tglpencatatan','$totalbayar','$status','$keterangan')");
 
header("location:data_tagihan.php?pesan=input");
?>