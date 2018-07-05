<?php

	include '../koneksi.php';
	
	
	$id_user = $dataObjek->id_user;
	
	$perintah_sql = "delete from users where id_user = {$id_user}";
	
	$result = mysqli_query($koneksi,$perintah_sql);

?>