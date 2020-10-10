<?php  
require "config/dbconnection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SPK - Rumah Kos Terbaik</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none"></span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/indekos.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#home">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#alternative">Alternatif Pilihan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#preferensi">Bobot Tiap Kriteria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#result">Hasil Perangkingan</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="home">
      <div class="w-100">
        <h1 class="mb-0">Pemilihan
          <span class="text-primary">Rumah Kos</span> Terbaik
        </h1>
        <div class="subheading mb-5">
          di Kecamatan Mlati · Kabupaten Sleman · Daerah Istimewa Yogyakarta
        </div>
        <p class="lead mb-5" align="justify">
            Daerah Istimewa Yogyakarta tidak hanya menjadi destinasi wisata, namun juga menjadi destinasi para pelajar. Banyaknya Perguruan Tinggi yang ada di Yogyakarta, baik Perguruan Tinggi Negeri (PTN) maupun Perguruan Tinggi Swasta (PTS) rupanya menarik para pelajar dari luar daerah bahkan pelajar internasional. Sejalan dengan banyaknya pelajar pendatang menyebabkan permintaan rumah kos di sekitar area kampus meningkat.
            Salah satu kecamatan yang memiliki banyak rumah kos adalah Kecamatan Mlati, Kabupaten Sleman. Jenis rumah kos disini sangat beragam, mulai dari lokasi, harga sewa, fasilitas, luas kamar, serta keamanannya. Aplikasi Sistem Pendukung Keputusan ini akan <span class="text-primary" style="font-weight: bold;"> membantu pencari kos untuk dapat menentukan pilihan rumah kos terbaiknya.</span>
        </p>
      </div>
    </section>

    <hr class="m-0">

    <!-- SECTION ALTERNATIF PILIHAN -->
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="alternative">
    <div class="w-100">
        <h2 class="mb-5">Alternatif Pilihan</h2>
        <div class="mb-3">

        <!-- TAMBAH ALTERNATIF -->
        <a href="#" class="btn btn-warning" data-target="#tambahAlternatif" data-toggle="modal"><i class="fas fa-plus"></i> Tambah Alternatif</a>
        </div>
        <div class="mb-3">
            <table class="table" style="text-align:center;">
                <tr>
                    <th>No.</th>
                    <th>Nama Alternatif</th>
                    <th>Alamat</th>
                    <th width="30%">Nilai Kriteria</th>
                    <th>Aksi</th>
                </tr>
                <?php
				$no = 0;
				$tampil=mysqli_query($config,"SELECT * from alternatif");
				while ($r=mysqli_fetch_array($tampil)) {
                $no++;
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $r['nama']?></td>
                    <td><?php echo $r['alamat']?></td>
                    <td>
                        <!-- EDIT NILAI KRITERIA -->
                        <a href="#" class="open_value btn btn-warning" id="<?php echo $r['id_alternatif']?>"data-toggle="modal"><i class="far fa-plus-square"></i> Edit Nilai</i></a> &nbsp;

                        
                        <!-- KOSONGKAN NILAI KRITERIA -->
                        <a href="#" class="btn btn-dark"  onclick="confirm_modal('config/deleteVal.php?&id=<?php echo $r['id_alternatif']; ?>')" data-target="#hapusKriteria" data-toggle="modal"><i class="far fa-minus-square"> </i> Hapus Nilai</a>
                    </td>
                    <td>
                        <!-- EDIT ALTERNATIF -->
                        <a href="#" class="open_modal btn btn-warning" id="<?php echo $r['id_alternatif']?>"data-toggle="modal"><i class="far fa-edit"></i></a> &nbsp;

                        <!-- HAPUS ALTERNATIF -->
                        <a href="#" class="btn btn-dark"  onclick="delAltConfirm('config/deleteProcess.php?&id=<?php echo $r['id_alternatif']; ?>')" data-target="#hapusAlternatif" data-toggle="modal"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    </section>

    <hr class="m-0">

    <!-- SECTION BOBOT TIAP KRITERIA -->
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="preferensi">
    <div class="w-100">
        <h2 class="mb-0">Bobot Tiap Kriteria</h2>
        <div class="subheading mb-5" style="text-transform: lowercase;">
          Catatan: Jumlah total bobot tiap kriteria harus sama dengan 100
        </div>

        <div class="mb-3">
            <table class="table" style="text-align:center;">
                <tr>
                    <th>No.</th>
                    <th>Nama Kriteria</th>
                    <th>Bobot</th>
                    <th>Aksi</th>
                </tr>
                <?php
				$no = 0;
				$tampil=mysqli_query($config,"SELECT * from kriteria");
				while ($r=mysqli_fetch_array($tampil)) {
                $no++;
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $r['nama_kriteria']?></td>
                    <td><?php echo $r['bobot_kriteria']?></td>
                    <td>
                        <!-- EDIT NILAI KRITERIA -->
                        <a href="#" class="preference_modal btn btn-warning" id="<?php echo $r['id_kriteria']?>"data-toggle="modal"><i class="far fa-edit"></i> Edit Bobot</a> &nbsp;
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    </section>

    <hr class="m-0">

    <!-- SECTION Hasil Perangkingan -->
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="result">
      <div class="w-100">
          <h2 class="mb-0">Hasil Perangkingan</h2>
          <div class="subheading mb-5" style="text-transform: lowercase;">
            Alternatif yang memiliki nilai paling besar merupakan alternatif terbaik
          </div>

          <div class="mb-3">
            <table class="table" style="text-align:center;">
                <tr>
                    <th>No.</th>
                    <th>Nama Alternatif</th>
                    <th>Alamat</th>
                    <th>Nilai</th>
                </tr>
        <?php
				$tampil=mysqli_query($config,"SELECT * FROM alternatif");
				while ($r=mysqli_fetch_array($tampil)) {
          $query = mysqli_query($config, "SELECT id_kriteria, MAX(nilai) as max, MIN(nilai) as min FROM rating_kecocokan GROUP BY id_kriteria");
          while ($rmaxmin = mysqli_fetch_array($query)) {
              
              $max[$rmaxmin['id_kriteria']] = $rmaxmin['max'];
              $min[$rmaxmin['id_kriteria']] = $rmaxmin['min'];
          }

          $nilai = 0;
          $query = mysqli_query($config, "SELECT * FROM rating_kecocokan NATURAL JOIN kriteria NATURAL JOIN alternatif WHERE id_alternatif = $r[id_alternatif] ORDER BY id_kriteria ASC");
          while ($rdata = mysqli_fetch_array($query))
          {
              if ($rdata['jenis_kriteria'] == 'Benefit')
              {
                  $nilai = ($rdata['nilai']/$max[$rdata['id_kriteria']]) * $rdata['bobot_kriteria'] + $nilai;
              }
              else
              {
                  $nilai = ($min[$rdata['id_kriteria']]/$rdata['nilai']) * $rdata['bobot_kriteria'] + $nilai;
              }
          }
          $nilai= $nilai/100;

          $queryCheck = mysqli_query($config, "SELECT * FROM ranking WHERE id_alternatif = $r[id_alternatif]");
          $rowCheck = mysqli_num_rows($queryCheck);
          
          if($rowCheck > 0){
            $resultSAW = mysqli_query($config, "UPDATE ranking SET hasil_saw = $nilai WHERE id_alternatif = $r[id_alternatif]");
          } else {
            $resultSAW = mysqli_query($config, "INSERT INTO ranking VALUES ($r[id_alternatif],$nilai)");
          }
          
          }
          $no = 1;
          $sort = mysqli_query($config,"SELECT * FROM alternatif a
                                        INNER JOIN ranking r
                                        ON a.id_alternatif = r.id_alternatif
                                        ORDER BY hasil_saw DESC");
          while ($show = mysqli_fetch_array($sort)) {?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $show['nama']?></td>
                <td><?php echo $show['alamat']?></td>
                <td><?php echo $show['hasil_saw']?></td>
                <?php $no ++;
          } ?>
            </table>
        </div>
      </div>
    </section>
  </div>

    <!-- Modal Tambah Alternatif -->
    <div id="tambahAlternatif" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">TAMBAH ALTERNATIF</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="config/addProcess.php" enctype="multipart/form-data" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama"> Nama Rumah Kos </label>
                    <input type="text" class="form-control" id="nama" name="nama_alternatif" required>
                </div>
                <div class="form-group">
                    <label for="alamat"> Alamat </label>
                    <textarea class="form-control" id="alamat" name="alamat_alternatif" required></textarea>
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

   <!-- Modal Edit Nilai Kriteria --> 
    <div id="editPreferensi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myPreferenceModal" aria-hidden="true">

    </div>

    <!-- Modal Edit Alternatif --> 
    <div id="editAlternatif" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    </div>

    <!-- Modal Hapus Alternatif --> 
    <div id="hapusAlternatif" class="modal fade" >
      <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" align="center">Apa Anda yakin akan menghapus data ini?</h4>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal">Batal</button>
                <a href="#" class="btn btn-dark" id="delete_link">Hapus</a>
            </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Modal Hapus Nilai Kriteria --> 
    <div id="hapusKriteria" class="modal fade" >
      <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" align="center">Apa Anda yakin akan menghapus data ini?</h4>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal">Batal</button>
                <a href="#" class="btn btn-dark" id="delete_value">Hapus</a>
            </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit Nilai Kriteria --> 
    <div id="isiKriteria" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myKriteriaModal" aria-hidden="true">

    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>

    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>

    <!--JS untuk Modal Edit Preferensi --> 
    <script type="text/javascript">
       $(document).ready(function () {
       $(".preference_modal").click(function(e) {
          var m = $(this).attr("id");
               $.ajax({
                       url: "modalPreferensi.php",
                       type: "GET",
                       data : {id: m,},
                       success: function (ajaxData){
                       $("#editPreferensi").html(ajaxData);
                       $("#editPreferensi").modal('show',{backdrop: 'true'});
                   }
                   });
            });
          });
    </script>

    <!--JS untuk Modal Edit --> 
    <script type="text/javascript">
       $(document).ready(function () {
       $(".open_modal").click(function(e) {
          var m = $(this).attr("id");
               $.ajax({
                       url: "modalEdit.php",
                       type: "GET",
                       data : {id: m,},
                       success: function (ajaxData){
                       $("#editAlternatif").html(ajaxData);
                       $("#editAlternatif").modal('show',{backdrop: 'true'});
                   }
                   });
            });
          });
    </script>

    <!-- JS untuk Modal Delete --> 
    <script type="text/javascript">
        function delAltConfirm(delete_url)
        {
          $('#hapusAlternatif').modal('show', {backdrop: 'static'});
          document.getElementById('delete_link').setAttribute('href', delete_url);
        }
    </script>

    <!-- JS untuk Modal Delete Nilai Kriteria --> 
    <script type="text/javascript">
        function confirm_modal(delete_url)
        {
          $('#hapusKriteria').modal('show', {backdrop: 'static'});
          document.getElementById('delete_value').setAttribute('href', delete_url);
        }
    </script>

    <!--JS untuk Modal Edit Nilai --> 
    <script type="text/javascript">
       $(document).ready(function () {
       $(".open_value").click(function(e) {
          var m = $(this).attr("id");
               $.ajax({
                       url: "modalCriteria.php",
                       type: "GET",
                       data : {id: m,},
                       success: function (ajaxData){
                       $("#isiKriteria").html(ajaxData);
                       $("#isiKriteria").modal('show',{backdrop: 'true'});
                   }
                   });
            });
          });
    </script>

</body>
</html>
