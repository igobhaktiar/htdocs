<?php

include'koneksi.php';

// PROSES REGISTRASI USER
if($_POST['register']){
  $nama	= $_POST['nama'];
  $nomer = $_POST['nomer'];
  $email	= $_POST['email'];
  $alamat = $_POST['alamat'];
	$user	= $_POST['username'];
	$pass	= $_POST['password'];

	if($nama && $nomer && $email && $alamat && $user && $pass){
		if(eregi("^[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,3}$", $email)){
			if($pass == $pass2){
				$cek = mysql_query("SELECT * FROM user WHERE username='$user'");
				$num = mysql_num_rows($cek);

				if($num == 0){
					$insert = mysql_query("INSERT INTO user VALUES(NULL, '$nama','$nomer','$email','$alamat', '$pass')");

					if($insert){
						echo '<p><b>Selamat... Anda berhasil Register!</b></p>';

						// PADA BARIS INI BISA DI ISI DENGAN SCRIPT LAIN
						// JIKA USER BERHASIL REGISTER
					} else {
						echo '<p>Gagal melakukan Register, coba lagi!</p>';
					}
				} else {
					echo '<p>Username sudah terdaftar, pilih Username lain!</p>';
				}
			} else {
				echo '<p>Ulangi Password yang sama!</p>';
			}
		} else {
			echo '<p>Format Email tidak valid!</p>';
		}
	} else {
		echo '<p>Semua wajib Anda isi!</p>';
	}
}
?>