<?php

	if (isset($_POST['submit'])){
		try {
			require "db/config.php";
			require "common.php";
			
			$connection = new PDO($dsn, $username, $password, $options);
			
			$sql = "SELECT * FROM users WHERE lokasi = :lokasi";
			
			$lokasi = $_POST['lokasi'];
			
			$statement = $connection->prepare($sql);
			$statement->bindParam(':lokasi', $lokasi, PDO::PARAM_STR);
			$statement->execute();
			
			$result = $statement->fetchAll();
			} catch(PDOException $error) {
			echo $sql . "<br>" . $error->getMessage();
			}
		}
	?>
	
	
<?php require "templates/header.php"; ?>
	
<?php
	if (isset($_POST['submit'])) {
		if ($result && $statement->rowCount() > 0) { ?>
		
			<h2>Hasil</h2>
			
			<table>
				<thead>
				<tr>
				<th>#</th>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>Alamat Email</th>
				<th>Usia</th>
				<th>Lokasi</th>
				<th>Tanggal</th>
				</tr>
			</thead>
			</tbody>
			
		<?php foreach ($result as $row){?>
		
			<tr>
		<td><?php echo escape ($row["id"]);
		?></td>
		<td><?php echo escape ($row["namadepan"]);
		?></td>
		<td><?php echo escape ($row["namabelakang"]);
		?></td>
		<td><?php echo escape ($row["email"]);
		?></td>
		<td><?php echo escape ($row["lokasi"]);
		?></td>
		<td><?php echo escape ($row["tanggal"]);
		?></td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	
	<?php } else { ?>
	> Tidak ada hasil <?php echo escape($_POST['lokasi']); ?>
	<?php }
	} ?>

	<h2>Mencari Pengguna Berdasarkan Lokasi</h2>
	
		<form method="post">
			<label for="lokasi">Lokasi</label>
			<input type="text" id="lokasi" name="lokasi">
			<input type="submit" name="submit" value="Lihat Hasil">
		<form>
		
		<a href="index.php">Kembali ke Beranda</a>
<?php require "templates/footer.php"; ?>
