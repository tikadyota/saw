<?php
include "../../config/dbconnection.php";

$module=$_GET['module'];
$act=$_GET['act'];


if ($module=='alternatif' AND $act=='add')
{
  	mysqli_query($config, "INSERT INTO alternatif(nama_alternatif,
                                  		alamat_alternatif) 
					             VALUES('$_POST[nama_alternatif]',
                                 		'$_POST[alamat_alternatif]')");
  	header('location:../../index.php?module='.$module);
}
elseif ($module=='alternatif' AND $act=='edit')
{
  	mysqli_query($config, "UPDATE alternatif SET nama_alternatif    = '$_POST[nama_alternatif]',
                                 		 alamat_alternatif  = '$_POST[alamat_alternatif]'
                           		   WHERE id_alternatif 	    = '$_POST[id]'");
  	header('location:../../index.php?module='.$module);
}
elseif ($module=='alternatif' AND $act=='delete')
{
  	mysqli_query($config, "DELETE FROM alternatif WHERE id_alternatif='$_GET[id]'");
  	header('location:../../index.php?module='.$module);
}
elseif ($module == 'alternatif' AND $act=='delpoint')
{
	mysqli_query($config, "DELETE FROM rating_kecocokan WHERE id_alternatif='$_GET[id]'");
	header('location:../../index.php?module='.$module);
}
elseif ($module=='alternatif' AND $act=='addpoint')
{
	$id_kriteria = explode(",", $_POST[id_kriteria]);
	$jum = count(explode(",", $_POST[id_kriteria]));h
	for ($i=0; $i < $jum; $i++) 
	{
		$id_kriteria_s = "text$id_kriteria[$i]";

		$tampil=mysqli_query($config, "SELECT * FROM rating_kecocokan WHERE id_alternatif = '$_POST[id_alternatif]' and id_kriteria = '$id_kriteria[$i]'");
		if ($r=mysqli_fetch_array($tampil))
		{
			mysqli_query($config, "UPDATE kriteria SET nilai  		= '$_POST[$id_kriteria_s]'
                           		   	   WHERE id_alternatif 	= '$_POST[id_alternatif]' and
                           		   	   		 id_kriteria 		= '$id_kriteria[$i]'");
		}
		else
		{
			mysqli_query($config, "INSERT INTO kriteria(	id_alternatif,
                                  	  			id_kriteria,
                                  	  			nilai) 
					            		VALUES( '$_POST[id_alternatif]',
                                       			'$id_kriteria[$i]',
                                       			'$_POST[$id_kriteria_s]')");

		}
		
	
	}
  	
  	header('location:../../index.php?module='.$module);
}
