<?php 
require_once 'connect.php';
$kodetarif = $_GET['kodetarif'];
mysqli_query($koneksi, "DELETE FROM tb_tarif WHERE kodetarif='$kodetarif'")or die(mysqli_error());
 
header("location:data_tarif.php?pesan=hapus");
?>