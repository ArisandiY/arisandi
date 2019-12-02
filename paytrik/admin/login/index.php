<!DOCTYPE html>
<html>
<head>
	<title>Login - Paytrik</title>
	<meta charset="utf-8">
	<meta content="viewport" class="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
	<body>
		<div class="wrap-login">
			<div class="main-form">
				<div class="head">
					<h1>Login - Paytrik</h1>
				</div>
				<table>
				<form method="post" action="cek_login.php">
					<tr>
						<td><label>Username</label></td>
						<td><input type="text" name="username" placeholder="Masukkan Username..."></td>	
					</tr>
					<tr>
						<td><label>Password</label></td>
						<td><input type="password" name="password" placeholder="Masukkan Password..."></td>
					</tr>
					<tr>
						<td><center><input class="submit" type="submit" name="logs"></center></td>
					</tr>
				</form>
			</div>
		</div>
		<!-- cek pesan notif -->
				  <?php 
				  if(isset($_GET['pesan'])){
				    if($_GET['pesan'] == "gagal"){
				      echo "<script>
				      alert('Login gagal! username dan password salah!')
				      </script>";
				    }else if($_GET['pesan'] == "logout"){
				      echo "<script>
				      alert('Anda telah berhasil logout')
				      </script>";
				    }else if($_GET['pesan'] == "belum_login"){
				      echo "<script>
				      alert('Anda harus login untuk mengakses dashboard')
				      </script>";
				    }else if($_GET['pesan'] == "tidak_berwenang"){
				      echo "<script>
				      alert('Anda TIDAK BERWENANG untuk mengakses halaman admin')
				      </script>";
				    }
				  }
				  ?>
	</body>
</html>