<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'sis_login');

	$conn = new MySQLi(HOST,USER,PASS,BASE);

	if($conn->error){
		die("Falha ao conectar com banco de dados: " . $conn->error);
	}
