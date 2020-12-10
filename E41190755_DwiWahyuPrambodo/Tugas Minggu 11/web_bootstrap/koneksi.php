<?php
$koneksi = mysqli_connect ("localhost","root","","minggu_11");

if (mysqli_connect_error()) {
    echo "Koneksi Database Gagal :".mysqli_connect_error();
}
?>