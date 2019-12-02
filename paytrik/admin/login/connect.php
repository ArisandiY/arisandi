<?php 
	$connect = mysqli_connect("localhost","root","","paytrik");

	//cek koneksinya

	if (mysqli_connect_errno()) 
	{
		echo "koneski gagal: " . mysqli_connect_error();
	}	


 ?>