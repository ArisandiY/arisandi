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
    					<li><i class="fa fa-book"></i><a href="data_tagihan.php">Data Tagihan</a></li>
    					<li id="navbar"><i class="fa fa-book"></i><a href="data_tarif.php">Data Tarif</a></li>
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
    				<h1>DATA TARIF</h1>
    				<div class="button">
    					<a class="action_add" href="add_tarif.php">Tambah Data <i class="fa fa-plus" style="color: white;"></i></a>
    				</div>
    				<table class="content-table">
					  <thead>
					    <tr>
					      <th>Golongan</th>
					      <th>Daya</th>
					      <th>Tarif Per KWh</th>
					      <th>Beban</th>
					      <th>Action</th>
					    </tr>
					  </thead>
					  <?php 
					  include "connect.php";
					  $query= mysqli_query($connect, "select * from tb_tarif")or die(mysqli_error());
					  $nomor = 1;
					  while($data = mysqli_fetch_array($query)){

					  ?>
					  <tbody>
					    <tr>
					      <td><?php echo $data['golongan']; ?></td>
					      <td><?php echo $data['daya']; ?></td>
					      <td><?php echo $data['tarifperkwh']; ?></td>
					      <td><?php echo $data['beban']; ?></td>
					      <td>
					      	<a class="action_delete" href="hapus_tarif.php" onclick="return confirm('Anda Yakin Menghapus Data?')">Hapus</a>
					      	<a class="action_edit" href="edit_tarif.php?kodetarif=<?= $data['kodetarif'] ?>">Edit</a>
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