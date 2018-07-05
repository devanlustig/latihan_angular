<?php

	include '../koneksi.php';
	$perintah_sql = "select * from users";
	
	$data = [];
	
	$result = mysqli_query($koneksi,$perintah_sql);
	while($row = mysqli_fetch_array($result)){
		$temp_data = [];
		$temp_data['id_user'] = $row['id_user'];
		$temp_data['nama'] = $row['nama'];
		$temp_data['akses'] = $row['akses'];
		
		array_push($data,$temp_data);
	}
	
	echo json_encode($data);

?>