<?php
	require "dbconnection.php";
	$id=$_POST['id'];
	$nilai_preferensi = $_POST['nilai_preferensi'];
	echo $id." ".$nilai_preferensi;
	$result = mysqli_query($config,"UPDATE kriteria 
						SET bobot_kriteria = $nilai_preferensi WHERE id_kriteria = '$id'");
	header('location:../index.php');
?>