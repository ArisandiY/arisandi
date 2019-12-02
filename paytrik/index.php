<!DOCTYPE html>
<?php 
	require_once "admin/connect.php";
 ?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Paytrik - Dashboard</title>
		<link rel="stylesheet" type="text/css" href="admin/css/style.css">
		<link rel="stylesheet" type="text/css" href="admin/css/fontawesome/css/all.css">
	</head>
	<body>
		<?php 
		session_start();
		if ($_SESSION['status']!="login") {
			header("location:admin/login/index.php?pesan=belum_login");
		}
		?>
		<div class="wrap-all">
			<!-- navbar -->
			<div class="nav">
				<i class="fa fa-bolt" style="font-size: 30px; padding-left: 30px; color: yellow; position: relative; top: 3px; padding-right: 5px;"></i>
				<h3>Paytrik</h3>
				<a id="logout" href="admin/logout.php">LOGOUT?</a>	
				<a>Selamat Datang <?php echo $_SESSION['username']; ?> !</a>
			</div>
			<div class="content-wrap">
				<div class="navbar">
					<ul>
          				<li id="navbar"><i class="fa fa-home"></i><a href="index.php">Dashboard</a></li>
    					<li><i class="fa fa-address-card"></i><a href="admin/data_login.php">Data Login</a></li>
    					<li><i class="fa fa-address-book"></i><a href="admin/data_pelanggan.php">Data Pelanggan</a></li>
    					<li><i class="fa fa-book"></i><a href="admin/data_pembayaran.php">Data Pembayaran</a></li>
    					<li><i class="fa fa-book"></i><a href="admin/data_tagihan.php">Data Tagihan</a></li>
    					<li><i class="fa fa-book"></i><a href="admin/data_tarif.php">Data Tarif</a></li>
    				</ul>
    			</div>
    			<div class="cont">
    				<div class="logo">
    					<img src="admin/pic/logo.png"><br>	
    				<h1 id="f">PAY</h1><h1 id="b">TRIK</h1>
    				</div>
    			</div>	
			</div> 
		</div>	

	</body>
	</html>