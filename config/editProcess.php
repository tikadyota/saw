<?php
	require "dbconnection.php";
	$id=$_POST['id'];
	$nama = $_POST['nama_alternatif'];
	$alamat = $_POST['alamat_alternatif'];
	$result = mysqli_query($config,"UPDATE alternatif 
						SET nama = '$nama', alamat = '$alamat' WHERE id_alternatif = '$id'");
	header('location:../index.php');
?>