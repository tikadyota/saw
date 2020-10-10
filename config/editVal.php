<?php
require "dbconnection.php";

$id_alternatif = $_POST['id_alternatif'];

for($i=0; $i<6; $i++){
	$inputNilai = $_POST["nilaiKriteria"][$i];
	$inputID = $_POST["idKriteria"][$i];

	$show=mysqli_query($config, "SELECT * FROM rating_kecocokan 
								   WHERE id_alternatif = $id_alternatif 
								   AND id_kriteria = $inputID");
	
	if ($r=mysqli_fetch_array($show)){
		$result = mysqli_query($config,"UPDATE rating_kecocokan SET id_alternatif=$id_alternatif,
										id_kriteria = $inputID, nilai = $inputNilai WHERE 
										id_alternatif = $id_alternatif AND id_kriteria = $inputID");
	}else{
		$result = mysqli_query($config,"INSERT INTO rating_kecocokan (id_alternatif,id_kriteria,nilai) 
						   VALUES ($id_alternatif, $inputID, $inputNilai)");	
	}
	
}

header('location:../index.php#alternatif');

?>