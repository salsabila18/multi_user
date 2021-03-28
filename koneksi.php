<?php 
	$koneksi=mysqli_connect("localhost","root","","program_sederhana");
	if(mysqli_connect_errno($koneksi)){
		echo "gagal terhubung".mysqli_connect_error($koneksi);
	}

 ?>