<?php
	error_reporting(0);
	$aksi = "modul/mod_alternatif/aksi_alternatif.php";

switch($_GET[act]){
default:
?>
	<h3>
		Alternatif Rumah Kost
	</h3>
	<hr>
	<button type="button" class="btn btn-default" onclick=location.href="?module=alternatif&act=add">
		Tambah Alternatif Rumah Kost
	</button>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Aksi</th>
				<th>Alternatif</th>
                <th>Alamat</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$no = 0;
				$tampil=mysqli_query($config,"SELECT * from alternatif");
				while ($r=mysqli_fetch_array($tampil))
				{
					$no++;
					echo"
					<tr>
						<td>$no</td>
						<td>
							<div class=\"btn-group btn-group-xs\">
								<button class=\"btn btn-default\" type=\"button\" onclick=location.href='?module=alternatif&act=addpoint&id=$r[id_alternatif]'>
									<em class=\"glyphicon glyphicon-plus\"></em>  Isi Nilai Kriteria Rumah Kost
								</button>
								<button class=\"btn btn-default\" type=\"button\" onclick=location.href='$aksi?module=alternatif&act=delpoint&id=$r[id_alternatif]'>
									<em class=\"glyphicon glyphicon-trash\"></em> Hapus Nilai Kriteria Rumah Kost
								</button>
							</div>
							<div class=\"btn-group btn-group-xs\">
								<button class=\"btn btn-default\" type=\"button\" onclick=location.href='?module=alternatif&act=edit&id=$r[id_alternatif]'>
									<em class=\"glyphicon glyphicon-edit\"></em> Edit Alternatif
								</button> 
								<button class=\"btn btn-default\" type=\"button\" onclick=location.href='$aksi?module=alternatif&act=delete&id=$r[id_alternatif]'>
									<em class=\"glyphicon glyphicon-trash\"></em> Delete Alternatif
								</button> 
							</div>
						</td>
						<td>$r[nama]</td>
						<td>$r[alamat]</td>
					</tr>
					";
				}
			?>
		</tbody>
	</table>
<?php
break;
case "add":
?>
	<h3>
		Tambah Data Alternatif Rumah Kost
	</h3>
	<hr>
	<?php
	echo"
	<form role='form' action='$aksi?module=alternatif&act=input' enctype='multipart/form-data' method='POST'>
	";
	?>
		<div class="form-group">
			<label for="nama">
				Nama Rumah Kost
			</label>
			<input type="text" class="form-control" id="nama" name="nama_alternatif">
		</div>
		<div class="form-group">
			<label for="alamat">
				Alamat
			</label>
			<textarea class="form-control" id="alamat" name="alamat_alternatif"></textarea>
		</div>
		<button type="submit" class="btn btn-default btn-success">
			Save
		</button>
		<button type="submit" class="btn btn-default btn-danger" onclick=self.history.back()>
			Cancel
		</button>
	</form>
<?php
break;

case "edit":
	$edit = mysqli_query($config, "SELECT * FROM alternatif WHERE id_alternatif = '$_GET[id]'");
    $r    = mysqli_fetch_array($edit);
?>

	<h3>
		Edit Data Alternatif
	Rumah Kost</h3>
	<hr>
	<?php
	echo"
	<form role='form' action='$aksi?module=alternatif&act=edit' enctype='multipart/form-data' method='POST'>
	";
	?>
		<input type="hidden" name="id" value="<?php echo"$r[id_alternatif]";?>">

		<div class="form-group">
			<label for="nama">
				Nama Rumah Kost
			</label>
			<input type="text" class="form-control" id="nama" name="nama_alternatif" value="<?php echo"$r[nama_alternatif]";?>">
		</div>
		<div class="form-group">
			<label for="alamat">
				Alamat
			</label>
			<textarea class="form-control" id="alamat" name="alamat_alternatif"><?php echo"$r[alamat_alternatif]";?></textarea>
		</div>
		<button type="submit" class="btn btn-default btn-success">
			Update
		</button>
		<button type="submit" class="btn btn-default btn-danger" onclick=self.history.back()>
			Cancel
		</button>
	</form>

<?php
break;
case "addpoint":
?>
	<h3>
		Isi Nilai Kriteria Rumah Kost
</h3>
	<hr>
	<?php
	echo"
	<form role='form' action='$aksi?module=alternatif&act=inputpoint' enctype='multipart/form-data' method='POST'>
		<input type=\"hidden\" name=\"id_alternatif\" value=\"$_GET[id]\">
		";

		$no = 0;
		$id_kriteria = "";
		$tampil=mysqli_query($config, "SELECT * FROM kriteria");
		while ($r=mysqli_fetch_array($tampil))
		{
			$tkriteria=mysqli_query($config, "SELECT * FROM rating_kecocokan WHERE id_kriteria = '$r[id_kriteria]' and id_alternatif = '$_GET[id]'");
			$rkriteria=mysqli_fetch_array($tkriteria);
			
			$no++;
			echo"

			<div class=\"form-group\">
				<label for=\"nama\">
					$r[nama_bobot]
				</label>
				<input type=\"text\" class=\"form-control\" name=\"text$r[id_kriteria]\" value = \"$rkriteria[nilai]\">
			</div>
			";
			if (empty($id_kriteria))
			{
				$id_kriteria = "$r[id_kriteria]";
			}
			else
			{
				$id_kriteria = $id_kriteria.",$r[id_kriteria]";
			}
			
		}
		echo"<input type=\"hidden\" name=\"id_kriteria\" value=\"$id_kriteria\">";
	?>
		<button type="submit" class="btn btn-default btn-success">
			Save
		</button>
		<button type="submit" class="btn btn-default btn-danger" onclick=self.history.back()>
			Cancel
		</button>
	</form>
<?php
break;
}
?>