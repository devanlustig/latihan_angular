<?php

	include '../koneksi.php';
	
	
	$id = $dataObjek->id;
	
	$perintah_sql = "delete from pelanggan where id = {$id}";
	
	$result = mysqli_query($koneksi,$perintah_sql);


?>