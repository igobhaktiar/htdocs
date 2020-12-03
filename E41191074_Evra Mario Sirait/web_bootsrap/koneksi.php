<?php
$koneksi = mysqli_connect("localhost","root","","db_web_bootstrap");

if(mysqli_connect_error()){
	echo "koneksi database gagal : " . mysqli_connect_error();
}
?>