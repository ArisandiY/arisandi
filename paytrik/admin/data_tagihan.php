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
    				<h1>DATA TAGIHAN</h1>
    				<div class="button">
    				</div>
    				<table class="content-table">
					  <thead>
					    <tr>
					      <th>No Meter</th>
					      <th>Nama</th>
					      <th>Pemakaian Akhir</th>
					      <th>Tanggal Pencatatan</th>
					      <th>Total Bayar</th>
					      <th>Status</th>
					      <th>Nama Petugas</th>
					      <th>Action</th>
					    </tr>
					  </thead>
					  <?php 
					  include "connect.php";

					  $query= mysqli_query($connect, "SELECT * FROM tb_tagihan JOIN tb_pelanggan USING (kodepelanggan) JOIN tb_tarif ON tb_tarif.kodetarif = tb_pelanggan.kodetarif")or die(mysqli_error($connect));

					  while($data = mysqli_fetch_assoc($query)){
					   ?>

					  <tbody>
					    <tr>
					      <td><?php echo $data['nometer'] ?></td>
					      <td><?php echo $data['nama'] ?></td>
					      <td><?php echo $data['pemakaianakhir'] ?> KwH</td>
					      <td><?php echo $data['tglpencatatan'] ?></td>
					      <td>Rp.<?php echo $data['totalbayar'] ?></td>
					      <td><?php echo $data['status'] ?></td>
					      <td><?php echo $data['namapetugas'] ?></td>
					      <td>
					      	<a class="action_edit" style="background-color: #0091c9;" href="add_pembayaran.php?kodetagihan=<?= $data['kodetagihan'] ?>">Bayar</a>
					      	<a class="action_edit" href="edit_tagihan.php?kodetagihan=<?= $data['kodetagihan'] ?>">Edit</a>
					      </td>
					    </tr>
					  </tbody>
					  <?php } ?>
					</table>
    			</div>	
			</div> 
		</div>	
	</body>
	</html>