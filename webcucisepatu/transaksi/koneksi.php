<?php
$koneksi = mysqli_connect("localhost","root", "", "dblaundry");

if(mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
echo "Koneksi Berhasil";
?>