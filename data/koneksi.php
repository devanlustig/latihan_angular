<?php

	$koneksi = mysqli_connect("localhost","root","","dbjualan") or die("tidak bisa tersambun ke database");
	$postdata = file_get_contents("php://input");
	$dataObjek = json_decode($postdata);

?>