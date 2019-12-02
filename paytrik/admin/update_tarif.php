<?php 

	require_once 'connect.php';
	$kodetarif = $_POST['kodetarif'];
	$golongan = $_POST['golongan'];
	$daya = $_POST['daya'];
	$tarifperkwh = $_POST['tarifperkwh'];
	$beban = $_POST['beban'];

	mysqli_query($connect, "UPDATE tb_tarif SET golongan='$golongan', daya='$daya', tarifperkwh='$tarifperkwh', beban='$beban' WHERE kodetarif='$kodetarif' ");
	header("location:data_tarif.php?pesan=update");
?>