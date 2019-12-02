<?php 

	require_once 'connect.php';
	$kodepembayaran = $_POST['kodepembayaran'];
	$kodetagihan = $_POST['kodetagihan'];
	$tglbayar = $_POST['tglbayar'];
	$buktipembayaran = $_POST['buktipembayaran'];
	$status = 	$_POST['status'];

	mysqli_query($connect, "UPDATE tb_pembayaran SET kodetagihan='$kodetagihan', tglbayar='$tglbayar', buktipembayaran='$buktipembayaran', status='$status' WHERE kodepembayaran='$kodepembayaran' ");

	header("location:data_pembayaran.php?pesan=update");

?>