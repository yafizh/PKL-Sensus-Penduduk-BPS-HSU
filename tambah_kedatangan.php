<?php include_once("header.php"); ?>
<?php include_once("koneksi.php"); ?>
<?php
if (isset($_POST['submit'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $rt = $_POST['rt'];
  $rw = $_POST['rw'];
  $desa = $_POST['desa'];
  $kabupaten = $_POST['kabupaten'];
  $kecamatan = $_POST['kecamatan'];
  $provinsi = $_POST['provinsi'];
  $tanggal = $_POST['tanggal'];

  $sql = "
        INSERT INTO kedatangan (
            nik, 
            nama, 
            alamat, 
            rt, 
            rw, 
            desa, 
            kabupaten, 
            kecamatan,
            provinsi,
            tanggal 
        ) VALUES (
            '$nik', 
            '$nama', 
            '$alamat', 
            '$rt',
            '$rw',
            '$desa', 
            '$kabupaten',
            '$kecamatan',
            '$provinsi',
            '$tanggal' 
        )";

  if ($mysqli->query($sql) === TRUE) echo "<script>alert('Data Kedatangan berhasil ditambahkan.')</script>";
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
                <h2 class="mb-3" id="buttons">Tambah Data Kedatangan</h2>
              </div>
            </div>
          </div>
          <hr>
          <form action="" method="POST">
            <div class="form-group">
              <label for="nik">NIK</label>
              <input class="form-control" name="nik" id="nik" type="text">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input class="form-control" name="nama" id="nama" type="text">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input class="form-control" name="alamat" id="alamat" type="text">
            </div>
            <div class="form-group">
              <label for="rt">RT</label>
              <input class="form-control" name="rt" id="rt" type="text">
            </div>
            <div class="form-group">
              <label for="rw">RW</label>
              <input class="form-control" name="rw" id="rw" type="text">
            </div>
            <div class="form-group">
              <label for="desa">Desa</label>
              <input class="form-control" name="desa" id="desa" type="text">
            </div>
            <div class="form-group">
              <label for="kabupaten">Kabupaten</label>
              <input class="form-control" name="kabupaten" id="kabupaten" type="text">
            </div>
            <div class="form-group">
              <label for="kecamatan">Kecamatan</label>
              <input class="form-control" name="kecamatan" id="kecamatan" type="text">
            </div>
            <div class="form-group">
              <label for="provinsi">Provinsi</label>
              <input class="form-control" name="provinsi" id="provinsi" type="text">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input class="form-control" name="tanggal" id="tanggal" type="date">
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