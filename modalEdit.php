<?php
    require "config/dbconnection.php";
	$id = $_GET['id'];
	$query = mysqli_query($config, "SELECT * FROM alternatif WHERE id_alternatif = '$id'");
	$r=mysqli_fetch_assoc($query);
?>

<div class="modal-dialog">
    <div class="modal-content">

    	<div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Alternatif</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <form action="config/editProcess.php" name="modal_popup" enctype="multipart/form-data" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama"> Nama Rumah Kos </label>
                    <input type="text" class="form-control" id="nama" name="nama_alternatif" value="<?php echo $r['nama']?>">
                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $r['id_alternatif']?>">
                </div>
                <div class="form-group">
                    <label for="alamat"> Alamat </label>
                    <textarea class="form-control" id="alamat" name="alamat_alternatif"><?php echo $r['alamat']?></textarea>
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