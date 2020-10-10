<?php
    require "config/dbconnection.php";
    $id = $_GET['id'];
    $query = mysqli_query($config, "SELECT * FROM rating_kecocokan WHERE id_alternatif = '$id'");
    $r=mysqli_fetch_assoc($query);
?>

<div class="modal-dialog">
    <div class="modal-content">
    	<div class="modal-header">
            <h4 class="modal-title" id="myKriteriaModal">Edit Nilai Kriteria</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <form action="config/editVal.php" enctype="multipart/form-data" method="post">
        <div class="modal-body">
            <input type="hidden" name="id_alternatif" value="<?php echo $id?>">
            <div class="form-group">
                <input type="hidden" name="idKriteria[]" value="1">
                <label> Jarak ke kampus </label>
                <select name="nilaiKriteria[]" class="form-control">
                    <option value="1">&le; 500 m</option>
                    <option value="2">500 - 1000 m</option>
                    <option value="3">1000 - 1500 m</option>
                    <option value="4">1500 - 2000 m</option>
                    <option value="5">&ge; 2000 m</option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="idKriteria[]" value="2">
                <label> Jarak ke warung makan </label>
                <select name="nilaiKriteria[]" class="form-control">
                    <option value="1">&le; 100 m</option>
                    <option value="2">100 - 300 m</option>
                    <option value="3">300 - 500 m</option>
                    <option value="4">500 - 700 m</option>
                    <option value="5">&ge; 700 m</option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="idKriteria[]" value="3">
                <label> Harga sewa </label>
                <select name="nilaiKriteria[]" class="form-control">
                    <option value="1">&le; Rp500.000</option>
                    <option value="2">Rp500.000 - Rp650.000</option>
                    <option value="3">Rp650.000 - Rp800.000</option>
                    <option value="4">Rp800.000 - Rp950.000</option>
                    <option value="5">&ge; Rp950.000</option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="idKriteria[]" value="4">
                <label> Luas Kamar </label>
                <select name="nilaiKriteria[]" class="form-control">
                    <option value="1">2 x 3 m2</option>
                    <option value="2">3 x 3 m2</option>
                    <option value="3">3 x 4 m2</option>
                    <option value="4">4 x 4 m2</option>
                    <option value="5">4 x 5 m2</option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="idKriteria[]" value="5">
                <label> Fasilitas </label>
                <select name="nilaiKriteria[]" class="form-control">
                    <option value="1">Kasur</option>
                    <option value="2">Kasur, Lemari</option>
                    <option value="3">Kasur, Lemari, Meja, WiFi</option>
                    <option value="4">Kasur, Lemari, Meja, KM dalam, WiFi</option>
                    <option value="5">Kasur, Lemari, Meja, KM dalam, AC, WiFi</option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="idKriteria[]" value="6">
                <label> Keamanan </label>
                <select name="nilaiKriteria[]" class="form-control">
                    <option value="1">Tidak ada pagar, tidak ada petugas keamanan</option>
                    <option value="3">Ada pagar, tidak ada petugas keamanan</option>
                    <option value="5">Ada pagar, ada petugas keamanan</option>
                </select>
            </div>
        </div>
                
        <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
            <button class="btn btn-warning" type="submit"> Simpan </button>
        </div>
        </form>
    </div>           
</div>