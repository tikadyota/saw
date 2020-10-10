<?php
require "dbconnection.php";

$nama = $_POST['nama_alternatif'];
$alamat = $_POST['alamat_alternatif'];

$result = mysqli_query($config,"INSERT INTO alternatif (nama,alamat) 
								VALUES ('$nama','$alamat')");
if($result){
	echo "<script> alert('Data berhasil disimpan');</script>";
}
header('location:../index.php#alternatif');

?>