<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MYSQL</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MYSQL</h1>
        <h2>Menampilkan data dari Database</h2>
    </div>
    <br>
<div class="container">
    <a href="index.php" class="btn btn-info">Lihat Semua Data</a>

    <br>

    <h3>Edit Data</h3>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi, "select * from user where id = '$id'");
    $nomor = 1;
    while ($data = mysqli_fetch_array($query_mysql)){
    ?>
    
    <form action="update.php?id=<?php echo $data['id'] ?>" method="POST">
    <div class="form-group">
      <label>Nama :</label>
      <input type="text" class="form-control" value="<?php echo $data['nama'] ?>" name="nama">
    </div>
    <div class="form-group">
      <label>Alamat :</label>
      <input type="text" class="form-control" value="<?php echo $data['alamat'] ?>" name="alamat">
    </div>
    <div class="form-group">
      <label>Pekerjaan :</label>
      <input type="text" class="form-control" value="<?php echo $data['pekerjaan'] ?>" name="pekerjaan">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    
    <?php } ?>
    </div>
</body>
</html>