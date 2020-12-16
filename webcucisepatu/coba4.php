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
<?php include "./sidebar.php" ?>
    <a href="coba_hapus.php">
        <!-- <button type="button">Logout</button> -->
    </a><br> <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php

                $trea = $_SESSION['pos']['xid_barang'];
                $i = 0;
                $idbrg = $_SESSION['pos']['xid_barang'];
                $idtre = $_SESSION['pos']['xid_treatment'];
                $idprm = $_SESSION['pos']['xid_promo'];
                $jml = $_SESSION['pos']['xjumlah'];
                $psn = $_SESSION['pos']['xpesan'];

                $sqld = mysqli_query($konek, "select * from tb_promo where id_promo='$idprm'");
                $d = mysqli_fetch_assoc($sqld);

                foreach ($trea as $tre) {

                    $sqlb = mysqli_query($konek, "select * from tb_barang where id_barang='$idbrg[$i]'");
                    $b = mysqli_fetch_assoc($sqlb);

                    $sql = mysqli_query($konek, "select * from tb_treatment where id_treatment='$idtre[$i]'");
                    $h = mysqli_fetch_assoc($sql);
                    if ($d['diskon'] != 0) {
                        $diskon = $h['harga_treatment'] * $d['diskon'] / 100;
                        $harga = $diskon * $jml[$i];
                        $subtotal = $subtotal + $harga;
                    } else {
                        $harga = $h['harga_treatment'] * $jml[$i];
                        $subtotal = $subtotal + $harga;
                    }

                    echo "Untuk barang <b>" . $b['nama_barang'] . "</b> <br>";
                    echo "Nama treatment = " . $h['nama_treatment'] . "<br>";
                    echo "Biaya  = Rp " . number_format($h['harga_treatment']) . "<br>";
                    echo "jumlahnya= " . $jml[$i] . "<br>";
                    echo "Ongkosnya : Rp $harga <br><br>";
                    $i++;
                }

                $ido = $_SESSION['pos']['xid_ongkir'];
                $sqlo = mysqli_query($konek, "select * from tb_ongkir where id_ongkir='$ido'");
                $do = mysqli_fetch_assoc($sqlo);
                $total = $subtotal + $do['harga_ongkir'];

                echo "Diskon  = " . $d['nama_promo'] . " " . $d['diskon'] . "%<br>";
                echo "Ongkirnya : " . $do['harga_ongkir'];
                echo "<br>Total Pesanan : Rp $total";
                echo "<br>Pesan : $psn";

                ?>
            </div>
        </div>
        <a href="coba_aksi.php?total=<?php echo $total ?>"><button class="btn btn-outline-success btn-sm">Simpan</button></a>
    </div>
    <br>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script>

    <!-- <?php
            echo "<pre>";
            print_r($_SESSION['pos']);
            echo "</pre>";
            ?> -->
            <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

        });
    </script>
    <!--  footer -->
    <?php include "./footer.php" ?>
    <!-- end footer -->
</body>

</html>