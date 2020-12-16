<?php
session_start();
if (isset($_POST['btn'])) {
    // membuat session array dengan variabel post
    $_SESSION['pos'] = $_POST;
}
if (isset($_SESSION['pos'])) {
    $brg = $_SESSION['pos']['xid_barang'];
    $tre = $_SESSION['pos']['xid_treatment'];
    $jml = $_SESSION['pos']['xjumlah'];
    $okr = $_SESSION['pos']['xid_ongkir'];
    $prm = $_SESSION['pos']['xid_promo'];
    $jmp = $_SESSION['pos']['xjemput'];
    $atr = $_SESSION['pos']['xantar'];
    $psn = $_SESSION['pos']['xpesan'];
} else {
    $brg = '';
    $tre = '';
    $jml = '';
    $okr = '';
    $prm = '';
    $jmp = '';
    $atr = '';
    $psn = '';
}

echo "<script>location = 'coba4.php'</script>";
