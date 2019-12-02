<?php 

	require_once 'connect.php';

	$kodepelanggan = $_POST['kodepelanggan'];
	$nopelanggan = $_POST['nopelanggan'];
	$nama = $_POST['nama'];
	$nometer = $_POST['nometer'];
	$kodetarif = $_POST['kodetarif'];
	$tlp = $_POST['tlp'];
	$alamat = $_POST['alamat'];

	mysqli_query($connect, "UPDATE tb_pelanggan SET nopelanggan='$nopelanggan', nama='$nama', nometer='$nometer', kodetarif='$kodetarif', tlp='$tlp', alamat='$alamat' WHERE kodepelanggan='$kodepelanggan' ");

	header("location:data_pelanggan.php?pesan=update");

?>