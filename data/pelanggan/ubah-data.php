<?php

	include '../koneksi.php';
	
	$id = $dataObjek->id;
	$nama = $dataObjek->data->nama;
	$alamat = $dataObjek->data->alamat;
	$telp = $dataObjek->data->telp;
	$email = $dataObjek->data->email;
	
	$perintah_sql = "update pelanggan set nama = '{$nama}',alamat='{$alamat}',telp='{$telp}',email = '{$email}' where id = {$id} ";
	
	$result = mysqli_query($koneksi,$perintah_sql);
	
	$respon = "";
	if($result){
		$respon = "Data Berhasil dirubah";
	}else{
		$respon = "Gagal menyimpan data";
	}
	
	echo $respon;

?>