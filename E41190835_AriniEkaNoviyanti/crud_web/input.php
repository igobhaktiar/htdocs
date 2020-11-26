<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MYSQL - Menampilkan dari data Database</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="judul">
        <h1>Membuat CRUD dengan PHP dan MYSQL</h1>
        <h2>Menampilkan dari Database</h2>
    </div>

    <br>
<div class="container">
    <a href="index.php" class="btn btn-info">Lihat Semua Data</a>

    <br>
    <h3>Input Data Baru</h3>
    <form action="input-aksi.php" method="POST">
    <div class="form-group">
      <label>Nama :</label>
      <input type="text" class="form-control" placeholder="Masukkan nama" name="nama">
    </div>
    <div class="form-group">
      <label>Alamat :</label>
      <input type="text" class="form-control"  placeholder="Masukkan Alamat" name="alamat">
    </div>
    <div class="form-group">
      <label>Pekerjaan :</label>
      <input type="text" class="form-control"  placeholder="Masukkan Pekerjaan" name="pekerjaan">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
    </div>
</body>
</html>