<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transaksi</title>
    <link rel="stylesheet" href="sidebar/css/bootstrap.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="sidebar/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="sidebar/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="sidebar/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="sidebar/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="sidebar/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <style>
        .biru{
            background-color: white;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .biru h1{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 600;
            padding-bottom: 15px;
        }
        .kotak{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .biru img{
            width: 500px;
            height: 400px;
        }


        
    </style>
</head>
<body>

<?php include "./sidebar.php" ?>

<div class="contactus">
        <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Transaksi</h2>
                    
                  </div>
               </div>
            </div>
          </div>
      </div>
    <div class="container-fluid biru">
        <div class="row">
            <div class="col kotak">
                <img src="images/logo.png" alt="">
            </div>
            <div class="col" >
                <form action="" method="post">
                    
                    <button type="button" id="btn-tambah-form" class="btn btn-danger btn-sm">Tambah Form</button>
                    <button type="button" id="btn-reset-form" class="btn btn-outline-secondary btn-sm">Reset Form</button><br><br>

                    <b>Barang ke 1 :</b>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Jenis Barang</td>
                                <td><select class="form-control" name="" id="">
                                    <option value="1">Sepatu</option>
                                    <option value="2">Tas</option>
                                    <option value="3">Topi</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Threatment</td>
                                <td><select class="form-control" name="" id="">
                                    <option value="1">Deep Cleaning</option>
                                    <option value="2">Fast Cleaning</option>
                                    <option value="3">One Day Service</option>
                                    <option value="4">CAP</option>
                                    <option value="5">Unyellowing</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td><input class="form-control" type="text" name="" id=""></td>
                            </tr>
                        </tbody>
                    </table>

                    

                      <div id="insert-form"></div>
                      <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Pilih Lokasi</td>
                                <td>
                                    <select class="form-control" name="" id="">
                                        <option value="1">Banyuwangi - Rp. 0</option>
                                        <option value="2">Jember - Rp. 5000</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat Jemput</td>
                                <td><input class="form-control" type="text" name="" id=""></td>
                            </tr>
                            <tr>
                                <td>Alamat Diantar</td>
                                <td><input class="form-control" type="text" name="" id=""></td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td><input class="form-control" type="text" name="total" id="" value="Rp 50,000" readonly></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <hr>
                    <button type="submit" name="tambah_variasi" class="btn btn-outline-success btn-sm">Cuci Sekarang</button>
                </form>

                <input type="hidden" id="jumlah-form" value="1">

            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script>
        $(document).ready(function() { // Ketika halaman sudah diload dan siap
          $("#btn-tambah-form").click(function() { // Ketika tombol Tambah Data Form di klik
            var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
            var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
  
            // Kita akan menambahkan form dengan menggunakan append
            // pada sebuah tag div yg kita beri id insert-form
            $("#insert-form").append("<b>Barang ke " + nextform + " :</b>" +
              `<table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Jenis Barang</td>
                                <td><select class="form-control" name="" id="">
                                    <option value="1">Sepatu</option>
                                    <option value="2">Tas</option>
                                    <option value="3">Topi</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Threatment</td>
                                <td><select class="form-control" name="" id="">
                                    <option value="1">Deep Cleaning</option>
                                    <option value="2">Fast Cleaning</option>
                                    <option value="3">One Day Service</option>
                                    <option value="4">CAP</option>
                                    <option value="5">Unyellowing</option>
                                </select></td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td><input class="form-control" type="text" name="" id=""></td>
                            </tr>
                        </tbody>
                    </table>`+
              "<br>");
  
            $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
          });
  
          // Buat fungsi untuk mereset form ke semula
          $("#btn-reset-form").click(function() {
            $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
            $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
          });
        });
      </script>

    <!-- Javascript files-->
    <script src="sidebar/js/jquery.min.js"></script>
    <script src="sidebar/js/popper.min.js"></script>
    <script src="sidebar/js/bootstrap.bundle.min.js"></script>
    <script src="jsidebar/s/jquery-3.0.0.min.js"></script>
    <!-- sidebar -->
    <script src="sidebar/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="sidebar/js/custom.js"></script>
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