<?php 

session_start();

include 'connect.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$query= mysqli_query($connect,"SELECT * FROM tb_login WHERE username='$username' AND password='$password'");
 
$cek = mysqli_num_rows($query);
 
if($cek > 0){
	
	$data = mysqli_fetch_assoc($query);

	if ($data['level']=='admin') {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		$_SESSION['status'] = "login";

		header("location:../../index.php");
	}
	else if ($data['level']=='petugas') {
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "petugas";
		$_SESSION['status'] = "login";

		header("location:../../index.php");
	}

	else{
		header("location:index.php?pesan=gagal");
	}
}else{
	header("location:index.php?pesan=gagal");
}
?>