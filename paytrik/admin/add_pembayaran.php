<!DOCTYPE html>
<?php 
	require_once "connect.php";
 ?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Paytrik - Dashboard</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/fontawesome/css/all.css">
	</head>
	<body>
		<?php 
		session_start();
		if ($_SESSION['status']!="login") {
			header("location:login/index.php?pesan=belum_login");
		}

		?>
		<div class="wrap-all">
			<!-- navbar -->
			<div class="nav">
				<i class="fa fa-bolt" style="font-size: 30px; padding-left: 30px; color: yellow; position: relative; top: 3px; padding-right: 5px;"></i>
				<h3>Paytrik</h3>
				<a id="logout" href="logout.php">LOGOUT?</a>	
				<a>Selamat Datang <?php echo $_SESSION['username']; ?> !</a>
			</div>
			<div class="content-wrap">
				<div class="navbar">
					<ul>
          				<li><i class="fa fa-home"></i><a href="../index.php">Dashboard</a></li>
    					<li><i class="fa fa-address-card"></i><a href="data_login.php">Data Login</a></li>
    					<li><i class="fa fa-address-book"></i><a href="data_pelanggan.php">Data Pelanggan</a></li>
    					<li id="navbar"><i class="fa fa-book"></i><a href="data_pembayaran.php">Data Pembayaran</a></li>
    					<li><i class="fa fa-book"></i><a href="data_tagihan.php">Data Tagihan</a></li>
    					<li><i class="fa fa-book"></i><a href="data_tarif.php">Data Tarif</a></li>
    				</ul>
    			</div>
    			<div class="cont">
    				<h1>TAMBAH DATA PEMBAYARAN</h1>
    				<a class="action_add" href="data_pembayaran.php">Lihat Data</a>
		      		<div class="form-wrap">
		      			<form action="add_pembayaran_action.php" method="post" enctype="multipart/form-data">   
			            <div class="column">
			              <input type="hidden" name="kodetagihan" value="<?= $_GET['kodetagihan'] ?>">
			              <input type="hidden" name="kodepembayaran" >
			              <label>Bukti Pembayaran</label><br>
			              <input type="file" name="buktipembayaran" required style="float: left;">
			            </div>
			            <div class="column">
			              <label>Status</label><br>
			              <input type="text" name="statusp" placeholder="Status . . . " required>
			            </div>
			            <div class="fclear"></div>
			            <div class="lone">
			              <input type="submit" name="send" value="Simpan" class="action_save">
			            </div>
		      		</div>
		    	</div>	
			</div> 
		</div>
	</body>
</html>