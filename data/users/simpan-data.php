<?php

	include '../koneksi.php';
	
	$nama = $dataObjek->data->nama;
	$akses = $dataObjek->data->akses;
	
	$perintah_sql = "insert into users (nama,akses) values ('{$nama}','{$akses}')";
	
	$result = mysqli_query($koneksi,$perintah_sql);
	
	$respon = "";
	if($result){
		$respon = "Data Berhasil disimpan data";
	}else{
		$respon = "Gagal menyimpan data";
	}
	
	echo $respon;

?>