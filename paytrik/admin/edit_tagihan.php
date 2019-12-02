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
    					<li><i class="fa fa-book"></i><a href="data_pembayaran.php">Data Pembayaran</a></li>
    					<li id="navbar"><i class="fa fa-book"></i><a href="data_tagihan.php">Data Tagihan</a></li>
    					<li><i class="fa fa-book"></i><a href="data_tarif.php">Data Tarif</a></li>
    				</ul>
    			</div>
    			<div class="cont">
    				<h1>EDIT DATA TAGIHAN</h1>
    				<a class="action_add" href="data_tagihan.php">Lihat Data</a>
    				<?php 
		      		$kodetagihan = $_GET['kodetagihan'];
		      		$query_mysqli = mysqli_query($connect, "SELECT * FROM tb_tagihan WHERE kodetagihan='$kodetagihan'")or die(mysqli_error());
		      		while($data = mysqli_fetch_array($query_mysqli)){
		      		?>
		      		<div class="form-wrap">
		      			<form action="update_tagihan.php" method="post" enctype="multipart/form-data">   
			            <div class="column">
			              <label>Pemakaian Akhir</label><br>
			              <input type="hidden" name="kodetagihan" value="<?php echo $data['kodetagihan'] ?>">
			              <input type="text" name="pemakaianakhir" value="<?php echo $data['pemakaianakhir'] ?>" required>
			            </div>
			            <div class="column">
			              <label>Tanggal Pencatatan</label><br>
			              <input type="text" name="tglpencatatan" value="<?php echo $data['tglpencatatan'] ?>"  required>
			            </div>
			            <div class="column">
			              <label>Status</label><br>
			              <input type="text" name="status" value="<?php echo $data['status'] ?>"  required>
			            </div>
			            <div class="column">
			              <label>Nama Petugas</label><br>
			              <input type="text" name="namapetugas"  value="<?php echo $data['namapetugas'] ?>" required>
			            </div>
			            <div class="fclear"></div>
			            <div class="lone">
			              <input type="submit" name="send" value="Simpan" class="action_save">
			            </div>
				     <?php } ?>
		      		</div>
			        
		    	</div>	
			</div> 
		</div>
	</body>
</html>