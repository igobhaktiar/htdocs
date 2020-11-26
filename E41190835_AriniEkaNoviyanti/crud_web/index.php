<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat CRUD dengan PHP dan MYSQL - Menampilkan data dari Database</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class ="judul">
        <h1>Membuat CRUD dengan PHP dan MYSQL</h1>
        <h2>Menampilkan data dari Database</h2>
    </div>
    <br>
    <div class="container">
    <?php
    if (isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "Data berhasil diinput";
        } elseif ($pesan == "update"){
            echo "Data berhasil diupdate";
        } elseif ($pesan == "hapus"){
            echo "Data berhasil dihapus";
        }
    }
    ?>
    <br>
    <br>

    
    <a href="input.php" class = "btn btn-info"> + Tambah Data Baru</a>
    <h3>Data User</h3>
    <table border="1" class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($koneksi, "select * from user");
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)){
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-info">Edit</a>
                    <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>