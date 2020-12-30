<?php
	$host		= "localhost";
	$username 	= "root";
	$pasword	= "";
	$dbname		= "pdo";
	
	$dsn		= "mysql:host=$host;dbname=$dbname";
	
	$options	= array(
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
					);
