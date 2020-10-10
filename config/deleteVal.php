<?php
	require "dbconnection.php";
	$id=$_GET['id'];
	$result=mysqli_query($config,"DELETE FROM rating_kecocokan WHERE id_alternatif='$id'");
	header('location:../index.php');
?>