<?php

	include '../koneksi.php';
	
	$id_user = $dataObjek->id_user;
	$nama = $dataObjek->data->nama;
	$akses = $dataObjek->data->akses;
	
	$perintah_sql = "update users set nama = '{$nama}',akses='{$akses}' where id_user = {$id_user} ";
	
	$result = mysqli_query($koneksi,$perintah_sql);
	
	$respon = "";
	if($result){
		$respon = "Data Berhasil disimpan data";
	}else{
		$respon = "Gagal Merubah data";
	}
	
	echo $respon;

?>