<?php include_once("header.php"); ?>
<?php include_once("koneksi.php"); ?>
<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $nama_ibu = $_POST['nama_ibu'];
  $nik_ibu = $_POST['nik_ibu'];
  $nama_ayah = $_POST['nama_ayah'];
  $nik_ayah = $_POST['nik_ayah'];
  $tanggal = $_POST['tanggal'];
  $tempat = $_POST['tempat'];
  $alamat = $_POST['alamat'];

  $sql = "
        INSERT INTO kelahiran (
            nama, 
            jenis_kelamin, 
            nama_ibu, 
            nik_ibu, 
            nama_ayah, 
            nik_ayah, 
            tanggal, 
            tempat,
            alamat
        ) VALUES (
            '$nama', 
            '$jenis_kelamin', 
            '$nama_ibu', 
            '$nik_ibu',
            '$nama_ayah',
            '$nik_ayah', 
            '$tanggal',
            '$tempat',
            '$alamat'
        )";

  if ($mysqli->query($sql) === TRUE) echo "<script>alert('Data Kelahiran berhasil ditambahkan.')</script>";
  else echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>
<?php include_once("sidebar.php"); ?>
<main class="app-content">
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="page-header">
            <div class="row">
              <div class="col">
                <h2 class="mb-3" id="buttons">Tambah Data Kelahiran</h2>
              </div>
            </div>
          </div>
          <hr>
          <form action="" method="POST">
            <div class="form-group">
              <label for="nama">Nama</label>
              <input class="form-control" name="nama" id="nama" type="text">
            </div>
            <fieldset class="form-group">
              <legend>Jenis Kelamin</legend>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" id="optionsRadios1" type="radio" name="jenis_kelamin" value="Laki-Laki" checked="">Laki - Laki
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" id="optionsRadios2" type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                </label>
              </div>
            </fieldset>
            <div class="form-group">
              <label for="nama_ibu">Nama Ibu</label>
              <input class="form-control" name="nama_ibu" id="nama_ibu" type="text">
            </div>
            <div class="form-group">
              <label for="nik_ibu">NIK Ibu</label>
              <input class="form-control" name="nik_ibu" id="nik_ibu" type="text">
            </div>
            <div class="form-group">
              <label for="nama_ayah">Nama Ayah</label>
              <input class="form-control" name="nama_ayah" id="nama_ayah" type="text">
            </div>
            <div class="form-group">
              <label for="nik_ayah">NIK Ayah</label>
              <input class="form-control" name="nik_ayah" id="nik_ayah" type="text">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input class="form-control" name="tanggal" id="tanggal" type="date">
            </div>
            <div class="form-group">
              <label for="tempat">Tempat</label>
              <input class="form-control" name="tempat" id="tempat" type="text">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input class="form-control" name="alamat" id="alamat" type="text">
            </div>
            <button class="btn btn-primary" name="submit" type="submit">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<!-- Data table plugin-->
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
  $('#sampleTable').DataTable();
</script>
<!-- Google analytics script-->
<script type="text/javascript">
  if (document.location.hostname == 'pratikborsadiya.in') {
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-72504830-1', 'auto');
    ga('send', 'pageview');
  }
</script>
</body>

</html>