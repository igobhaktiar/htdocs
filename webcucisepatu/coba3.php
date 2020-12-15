<?php
include "koneksi/koneksi.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
</head>

<body>
    <a href="coba_hapus.php">
        <button type="button">Logout</button>
    </a><br> <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post" name="form1" action="coba_aksi1.php">
                    <?php
                    for ($i = 0; $i < 2; $i++) {
                    ?>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Jenis Barang</td>
                                    <td><select class="form-control" name="xid_barang[]" id="id_barang">
                                            <option value="">-----Pilih Barang-----</option>
                                            <?php
                                            $sql = mysqli_query($konek, "select * from tb_barang");
                                            while ($d = mysqli_fetch_assoc($sql)) {
                                            ?>
                                                <option value="<?= $d['id_barang']; ?>"><?= $d['nama_barang']; ?></option>
                                            <?php } ?>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td>Threatment</td>
                                    <td><select class="form-control" name="xid_treatment[]" id="id_treatment">
                                            <option value="">-----Pilih Treatment-----</option>
                                            <?php
                                            $sqla = mysqli_query($konek, "select * from tb_treatment");
                                            while ($da = mysqli_fetch_assoc($sqla)) {
                                            ?>
                                                <option value="<?= $da['id_treatment']; ?>"><?= $da['nama_treatment']; ?> - <?= $da['harga_treatment']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jumlah</td>
                                    <td><input class="form-control" type="text" name="xjumlah[]" id=""></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php } ?>
                    <hr>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Pilih Lokasi</td>
                                <td>
                                    <select class="form-control" name="xid_ongkir" id="xid_ongkir">
                                        <option value="">-----Pilih Lokasi-----</option>
                                        <?php
                                        $sql = mysqli_query($konek, "select * from tb_ongkir");
                                        while ($d = mysqli_fetch_assoc($sql)) {
                                        ?>
                                            <option value="<?= $d['id_ongkir']; ?>"><?= $d['alamat']; ?> - <?= $d['harga_ongkir']; ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Pilih Promo</td>
                                <td>
                                    <select class="form-control" name="xid_promo" id="xid_promo">
                                        <option value="">-----Pilih Promo-----</option>
                                        <?php
                                        $sql = mysqli_query($konek, "select * from tb_promo");
                                        while ($d = mysqli_fetch_assoc($sql)) {
                                        ?>
                                            <option value="<?= $d['id_promo']; ?>"><?= $d['nama_promo']; ?> - <?= $d['diskon']; ?>%</option>
                                        <?php } ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat Jemput</td>
                                <td><textarea class="form-control" name="xjemput" id="xjemput" cols="10" rows="3"></textarea></td>
                            </tr>
                            <tr>
                                <td>Alamat Diantar</td>
                                <td><textarea class="form-control" name="xantar" id="xantar" cols="10" rows="3"></textarea></td>
                            </tr>
                            <tr>
                                <td>Pesan (Opsional)</td>
                                <td><textarea class="form-control" name="xpesan" id="xpesan" cols="10" rows="3"></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" name="btn" class="btn btn-outline-success btn-sm">Cuci Sekarang</button>
                </form>
            </div>
            <div class="col">



                <button>simpan</button>
            </div>
        </div>
    </div>


</body>

</html>