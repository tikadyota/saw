<?php
	require "dbconnection.php";
	$id=$_GET['id'];
	$result=mysqli_query($config,"DELETE FROM alternatif WHERE id_alternatif='$id'");
	header('location:../index.php');
?>