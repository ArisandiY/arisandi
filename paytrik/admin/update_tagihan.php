<?php 

	require_once 'connect.php';

	$kodetagihan = $_POST['kodetagihan'];
	$pemakaianakhir = $_POST['pemakaianakhir'];
	$tglpencatatan = $_POST['tglpencatatan'];
	$status = $_POST['status'];
	$namapetugas = $_POST['namapetugas'];

	$query = mysqli_query($connect,"SELECT * FROM tb_tagihan JOIN tb_pelanggan ON tb_tagihan.kodepelanggan = tb_pelanggan.kodepelanggan JOIN tb_tarif ON tb_pelanggan.kodetarif = tb_tarif.kodetarif  WHERE kodetagihan='$kodetagihan'");

        $data = mysqli_fetch_assoc($query);

        if(mysqli_num_rows($query) > 0 ){
        
        $tarif = $data['tarifperkwh'];
        $usekwh = $data['pemakaianakhir'];
    	$totalharga = $tarif * $usekwh;

		$query = mysqli_query($connect, "UPDATE tb_tagihan SET pemakaianakhir = '$pemakaianakhir', tglpencatatan ='$tglpencatatan', totalbayar = '$totalharga', status ='$status', namapetugas ='$namapetugas' WHERE kodetagihan ='$kodetagihan' ");
		}

		if ($query) {
			echo "<script>
				alert('Berhasil diupdate');location.href = 'data_tagihan.php'
			</script>";
		} else {
			echo "<script>
				alert('Gagal diupdate');location.href = 'data_tagihan.php'
			</script>";
		}

?>