<?php 

require_once 'connect.php';



	$nopelanggan = $_POST['nopelanggan'];
	$nama = $_POST['nama'];
	$nometer = $_POST['nometer'];
	$kodetarif = $_POST['kodetarif'];
	$tlp = 	$_POST['tlp'];
	$alamat = $_POST['alamat'];

	$query = "INSERT INTO tb_pelanggan VALUES('','$nopelanggan','$nama','$nometer','$kodetarif','$tlp','$alamat')";

		mysqli_query($connect,$query);

    $asd = mysqli_query($connect, "SELECT * FROM tb_pelanggan ORDER BY kodepelanggan DESC LIMIT 1");
    $data = mysqli_fetch_assoc($asd);
    $kodepelanggan = $data['kodepelanggan'];
    $kodetarif = $data['kodetarif'];
    $catat = date("Y-m-d");


    $querytagihan = "INSERT INTO tb_tagihan VALUES('','$kodepelanggan','$kodetarif', '0', '$catat', '0', 'Pelanggan Baru', 'unknown')";


    	mysqli_query($connect,$querytagihan)or die(mysqli_error($connect));
 
header("location:data_pelanggan.php?pesan=input");
?>