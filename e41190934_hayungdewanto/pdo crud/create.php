<?php

	if (isset($_POST['submit'])) {
		require "db/config.php";
		require "common.php";
		
	try {
		$connection = new PDO($dsn, $username, $password, $options);
		
		$new_user = array("namadepan" => $_POST['namadepan'],
		"namabelakang" => $_POST['namabelakang'],
		"email" => $_POST['email'],
		"umur" => $_POST['umur'],
		"lokasi" => $_POST['lokasi']
		);
		
	$sql = sprintf("INSERT INTO %s (%s) values (%s)", "users", implode(", ", array_keys($new_user)), ":" . implode(", :", array_keys($new_user))
	);
	
	$statement = $connection->prepare($sql);
	$statement->execute($new_user);
	} catch(PDOException $error) {
	echo $sql . "<br>" . $error->getMessage();
	}
	}
	?>


<?php require "templates/header.php"; ?>

<?php if (isset($_POST['submit']) && $statement) { ?>
	> <?php echo $_POST['namadepan'];
	?> berhasil ditambahkan.
	<?php } ?>

	<h2>Tambahkan Pengguna</h2>
	
		<form method="post">
			<label for="namadepan">Nama Depan</label>
			<input type="text" name="namadepan" id="namadepan">
			<label for="namabelakang">Nama Belakang</label>
			<input type="text" name="namabelakang" id="namabelakang">
			<label for="email">Alamat Email</label>
			<input type="text" name="email" id="email">
			<label for="umur">Usia</label>
			<input type="text" name="umur" id="umur">
			<label for="lokasi">Lokasi</label>
			<input type="text" name="lokasi" id="lokasi">
			<input type="submit" name="submit" value="Submit">
		</form>
		
		<a href="index.php">Kembali ke Beranda</a>

<?php require "templates/footer.php"; ?>
