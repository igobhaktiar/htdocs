<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transaksi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .biru{
            background-color: lightblue;
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
        .futer{
            background-color: lightskyblue;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .futer h4{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: 600;
        }
        
    </style>
</head>
<body>
    <div class="container-fluid biru">
        <h1 align="center">SHOES CARE</h1>
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

    <div class="container-fluid futer">
        <h4>Happy Washing xixi:)</h4>
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
  
</body>
</html>