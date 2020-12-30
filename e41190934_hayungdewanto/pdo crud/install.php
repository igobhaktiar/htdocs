<?php

require "db/config.php";

try {
	$connection = new PDO("mysql:host=$host", $username, $pasword, $options);

	$sql = file_get_contents("data/init.sql");
	$connection->exec($sql);
	
	echo "Database dan Tabel users berhasil dibuat.";
	} catch (PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}
