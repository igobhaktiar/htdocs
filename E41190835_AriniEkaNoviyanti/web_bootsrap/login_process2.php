<?php
include "koneksi.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "select * from user where email='$email'");
$data = mysqli_fetch_assoc($sql);

if($data['password'] == ($password)){
    $_SESSION['nama_user'] = $data['nama'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['password'] = $data['password'];
    header("location:index.php?pesan=berhasil");
} else {
    header("location:login.php?pesan=gagal");
}
?>