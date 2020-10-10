<?php
// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "saw_indekos";

// Koneksi dan memilih database di server
$config = mysqli_connect($server,$username,$password,$database) or die("Koneksi gagal");

if (!$config) {
		die('Gagal terhubung ke MySQL: '.mysqli_connect_error());
	}
?>
