<?php 
	include('database.php');
	$koneksi = new Database();
	//Tambah Data Baru
	if (isset($_POST['tambah'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$umur = $_POST['umur'];
		$tabel = "mahasiswa";
		$kolom = "'$nim','$nama','$jk','$umur'";
		$koneksi->add_data($tabel,$kolom);
		header('location:index.php?pesan=berhasil');
	}elseif (isset($_POST['update'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$jk = $_POST['jk'];
		$umur = $_POST['umur'];	
		$tabel = "mahasiswa";
		$data = "nama = '$nama',jenis_kelamin = '$jk',umur = '$umur' ";
		$where = "nim ='$nim' ";
		$koneksi->update($tabel,$data,$where);
		header('location:index.php?pesan=update');
	}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PDO</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        
        <?php include "./navbar.php" ?>
        
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <ul style="list-style-type: none;">
                            <div class="col-md-2">  
                                <div class="form-group mt-4 mb-0">
                                    <a class="btn btn-primary btn-block" style="text-decoration: none;" href="index.php?hal=tambah">Tambah</a>
                                </div>
                            </div>   
                        </ul>
                        <?php 
                            if (isset($_GET['pesan'])) {
                                if ($_GET['pesan'] == "berhasil") {
                                    echo "Tambah Data Berhasil";
                                }elseif ($_GET['pesan'] == "update") {
                                    echo "Update Data Berhasil";
                                }elseif ($_GET['pesan'] == "hapus") {
                                    echo "Hapus Data Berhasil";
                                }
                            } 
                        ?>
                            <div>
                        <?php
                            if (isset($_GET['hal'])) {
                                $hal = $_GET['hal'];
                                switch ($hal) {
                                    case 'tambah':
                                        include 'input.php';
                                        break;
                                    case 'edit':
                                        include 'edit.php';
                                        break;
                                    case 'hapus':
                                        include 'hapus.php';
                                        break;
                                    default:
                                        echo "Halaman Tidak Ada";
                                        break;
                                }
                            }else{
                                include 'test.php';
                            }  
                        ?>
                            </div>
                        

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
