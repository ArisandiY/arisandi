<?php 

	require_once 'connect.php';
	$kodelogin = $_POST['kodelogin'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$namalengkap = $_POST['namalengkap'];
	$level = $_POST['level'];

	mysqli_query($connect, "UPDATE tb_login SET username='$username', password='$password', namalengkap='$namalengkap', level='$level' WHERE kodelogin='$kodelogin' ");
	header("location:data_login.php?pesan=update");
?>