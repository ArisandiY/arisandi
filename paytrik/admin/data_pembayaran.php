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
    			<?php 
				  if(isset($_GET['pesan'])){
				    $pesan = $_GET['pesan'];
				    if($pesan == "input"){
				      echo "<script>
				      alert('Data berhasil di simpan!')
				      </script>";
				    }else if($pesan == "update"){
				      echo "<script>
				      alert('Data berhasil di update!')
				      </script>";
				    }else if($pesan == "hapus"){
				      echo "<script>
				      alert('Data berhasil di hapus!')
				      </script>";
				    }
				  }
				  ?>
    			<div class="cont">
    				<h1>DATA PEMBAYARAN</h1>
    				<div class="button">
    				</div>
    				<table class="content-table">
					  <thead>
					    <tr>
					    	<th>No Pelanggan</th>
					    	<th>Nama</th>
					    	<th>No Meter</th>
					    	<th>Tarif/Daya</th>
					        <th>Tanggal Bayar</th>
					        <th>Total Bayar</th>
					        <th>Bukti Pembayaran</th>
					        <th>Status</th>
					    </tr>
					  </thead>
					  <?php 
					  include "connect.php";

					  $query = mysqli_query($connect,"SELECT * FROM tb_pembayaran JOIN tb_tagihan ON tb_pembayaran.kodetagihan = tb_tagihan.kodetagihan JOIN tb_pelanggan ON tb_tagihan.kodepelanggan = tb_pelanggan.kodepelanggan JOIN tb_tarif ON tb_pelanggan.kodetarif = tb_tarif.kodetarif");

					  while($data = mysqli_fetch_array($query)){
					   ?>
					  <tbody>
					    <tr>
					    	<td><?php echo $data['nopelanggan'] ?></td>
					    	<td><?php echo $data['nama'] ?></td>
					    	<td><?php echo $data['nometer'] ?></td>
					    	<td><?php echo $data['golongan'] ?>/<?php echo $data['daya']?></td>
					        <td><?php echo $data['tglbayar']; ?></td>
					        <td>Rp.<?php echo number_format($data['totalbayar']) ?></td>
					        <td><img src="buktiimg/<?php echo $data['buktipembayaran']; ?>"></td>
					        <td><?php echo $data['statusp']; ?></td>
					    </tr>
					  </tbody>
					  <?php } ?>
					</table>
    			</div>	
			</div> 
		</div>
	</body>
</html>