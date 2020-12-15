<?php
include "koneksi/koneksi.php";
session_start();
$id_pelanggan = 1;
$id_petugas = 1;
$id_ongkir = $_SESSION['pos']['xid_ongkir'];
$id_promo = 1;
$tgl_transaksi = '2020-12-1';
$antar = $_SESSION['pos']['xantar'];
$jemput = $_SESSION['pos']['xjemput'];
$total = $_GET['total'];
$keterangan = $_SESSION['pos']['xpesan'];


$sql = mysqli_query($konek, "insert into tb_transaksi(id_pelanggan,id_petugas,id_ongkir,id_promo,tanggal_transaksi,pengantaran,penjemputan,total,status,keterangan)
values ('$id_pelanggan','$id_petugas','$id_ongkir','$id_promo','$tgl_transaksi','$antar','$jemput','$total','pesan','$keterangan')");

$id_transaksi_barusan = mysqli_insert_id($konek);

$idbrg = $_SESSION['pos']['xid_barang'];
$idtre = $_SESSION['pos']['xid_treatment'];
$jml = $_SESSION['pos']['xjumlah'];
$i = 0;
$query = "INSERT INTO tb_detail_transaksi VALUES";
foreach ($idbrg as $idbr) {
    $sql = mysqli_query($konek, "select * from tb_treatment where id_treatment='$idtre[$i]'");
    $h = mysqli_fetch_assoc($sql);
    if ($d['diskon'] != 0) {
        $diskon = $h['harga_treatment'] * $d['diskon'] / 100;
        $subtotal = $diskon * $jml[$i];
    } else {
        $subtotal = $h['harga_treatment'] * $jml[$i];
    }

    $query .= "('" . NULL . "','" . $id_transaksi_barusan . "','" . $idbrg[$i] . "','" . $idtre[$i] . "','" . $jml[$i] . "','" . $subtotal . "'),";

    $i++;
}
$query = substr($query, 0, strlen($query) - 1) . ";";
mysqli_query($konek, $query);

echo "<script>location='coba4.php'</script>";
// echo "<pre>";
// print_r($_SESSION['pos']);
// echo "</pre>";
