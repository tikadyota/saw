<?php
    require "config/dbconnection.php";
	$id = $_GET['id'];
	$query = mysqli_query($config, "SELECT * FROM kriteria WHERE id_kriteria = '$id'");
	$r=mysqli_fetch_assoc($query);
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Nilai Preferensi</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <form action="config/editPreferenceProcess.php" name="modal_popup" enctype="multipart/form-data" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama"> Nama Kriteria </label>
                    <input type="text" class="form-control" id="nama" name="nama_kriteria" value="<?php echo $r['nama_kriteria']?>" disabled>
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $r['id_kriteria']?>">
                </div>
                <div class="form-group">
                    <label for="alamat"> Nilai Preferensi </label>
                    <input type="text" class="form-control" id="alamat" name="nilai_preferensi" value="<?php echo $r['bobot_kriteria']?>">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                <button class="btn btn-warning" type="submit"> Simpan </button>
            </div>
            </form>
            </div>           
        </div>
    </div>